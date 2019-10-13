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

use Exakat\Analyzer\Analyzer;

class Marmelab extends Reports {
    const FILE_EXTENSION = 'json';
    const FILE_FILENAME  = 'exakat';

    public function dependsOnAnalysis() {
        return array('Analyze');
    }

    public function generate($folder, $name = self::FILE_FILENAME) {
        $rulesets = $this->config->project_rulesets ?? $this->dependsOnAnalysis();
        
        $list = $this->rulesets->getRulesetsAnalyzers($rulesets);
        $list = makeList($list);
        
        $analyzers = array();
        $files     = array();

        $sqlQuery = "SELECT id, fullcode, file, line, analyzer FROM results WHERE analyzer in ($list)";
        $res = $this->sqlite->query($sqlQuery);

        $results = array();
        while($row = $res->fetchArray(\SQLITE3_ASSOC)) {
            if (!isset($analyzers[$row['analyzer']])) {
                $analyzer = $this->rulesets->getInstance($row['analyzer'], null, $this->config);

                $description = $this->getDocs($row['analyzer']);
                $a = array('id'          => $row['analyzer'],
                           'title'       => $description['name'],
                           'description' => $description['description'],
                           'severity'    => $description['severity'],
                           'fixtime'     => $description['timetofix'],
                           'clearphp'    => $description['clearphp'],
                           );

                $analyzers[$row['analyzer']] = (object) $a;
            }

            if (!isset($files[$row['file']])) {
                $a = array('id'   => count($files) + 1,
                           'file' => $row['file']);

                $files[$row['file']] = (object) $a;
            }
            $row['files_id'] = $files[$row['file']]->id;
            unset($row['file']);

            $x = (object) $row;
            $results[] = $x;

            $this->count();
        }

        $results = (object) array('reports'   => $results,
                                  'analyzers' => array_values($analyzers),
                                  'files'     => $files,
                                 );

        if ($name === self::STDOUT) {
            echo json_encode($results, \JSON_PRETTY_PRINT);
        } else {
            file_put_contents("$folder/$name." . self::FILE_EXTENSION, json_encode($results, \JSON_PRETTY_PRINT));
        }
    }
}

?>