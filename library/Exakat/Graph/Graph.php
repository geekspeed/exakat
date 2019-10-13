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

namespace Exakat\Graph;

use Exakat\Config;

abstract class Graph {
    protected $config = null;
    
    public const GRAPHDB = array('nogremlin', 'gsneo4j', 'tinkergraph');
    
    public function __construct(Config $config) {
        $this->config = $config;
    }

    abstract public function query($query, $params = array(), $load = array());

    abstract public function start();
    abstract public function stop();
             public function restart() {
        $this->stop();
        $this->start();
    }
    
    abstract public function serverInfo();
    abstract public function checkConnection();

    abstract public function clean();
    
    // Produces an id for storing a new value.
    // null means that the graph will handle it.
    // This is not the case of all graph : tinkergraph doesn't.
    public function getId() { return 'null'; }
    public function fixId($id) { return $id; }

    public static function getConnexion(Config $config) {
        $graphDBClass = "\\Exakat\\Graph\\{$config->gremlin}";
        return new $graphDBClass($config);
    }
}

?>
