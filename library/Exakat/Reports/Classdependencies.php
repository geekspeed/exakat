<?php
/*
 * Copyright 2012-2019 Damien Seguy – Exakat SAS <contact(at)exakat.io>
 * This file is part of Exakat.
 *
 * Exakat is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Exakat is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Exakat.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://exakat.io/>.
 *
*/

namespace Exakat\Reports;

use stdClass;

class Classdependencies extends Reports {
    const FILE_EXTENSION = '';
    const FILE_FILENAME  = 'class_dependencies';
    
    private $finalName   = '';
    private $tmpName     = '';

    public function generate($folder, $name= 'dependencies') {
        $this->finalName = "$folder/$name";
        $this->tmpName   = "{$this->config->tmp_dir}/.$name";

        copyDir("{$this->config->dir_root}/media/dependencies", $this->tmpName);

        $res = $this->sqlite->query('SELECT * FROM classesDependencies WHERE including != included LIMIT 3000');

        $json        = new stdClass();
        $json->edges = array();
        $json->nodes = array();

        $in          = array();
        $out         = array();
        $properties  = array();

        while($row = $res->fetchArray(\SQLITE3_ASSOC)) {
            if (isset($json->nodes[$row['including']])){
                $source = $json->nodes[$row['including']];
                ++$in[$source];
            } else {
                $source = count($json->nodes);
                $json->nodes[$row['including']] = $source;
                $properties[$source] = array('caption' => $row['including_name'],
                                             'type'    => $row['including_type'],);
                $in[$source] = 0;
                $out[$source] = 0;
            }

            if (isset($json->nodes[$row['included']])){
                $destination = $json->nodes[$row['included']];
                ++$out[$destination];
            } else {
                $destination = count($json->nodes);
                $json->nodes[$row['included']] = $destination;
                $properties[$destination] = array('caption' => $row['included_name'],
                                                  'type'    => $row['included_type'],);
                $in[$destination]  = 0;
                $out[$destination] = 0;
            }

            $R = new stdClass();
            $R->source = $source;
            $R->target = $destination;
            $R->caption = $row['type'];
            $json->edges[] = $R;

            $this->count();
        }

        $json->nodes = array_flip($json->nodes);
        foreach($in as $id => $i) {
            $json->nodes[$id] = (object) array('id'       => $id,
                                               'caption'  => $properties[$id]['caption'],
                                               'type'     => $properties[$id]['type'],
                                               'incoming' => $i,
                                               'outgoing' => $out[$id]);
        }

        file_put_contents("{$this->tmpName}/fidep.json", json_encode($json, \JSON_PRETTY_PRINT));

        // Finalisation
        if ($this->finalName !== '/') {
            rmdirRecursive($this->finalName);
        }

        if (file_exists($this->finalName)) {
            display($this->finalName . " folder was not cleaned. Please, remove it before producing the report. Aborting report\n");
            return;
        }

        rename($this->tmpName, $this->finalName);
    }
}

?>