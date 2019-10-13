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


namespace Exakat\Tasks;

use Exakat\Analyzer\Analyzer;
use Exakat\Exceptions\NoSuchAnalyzer;
use Exakat\Exceptions\NeedsAnalyzerThema;
use Exakat\GraphElements;

class Results extends Tasks {
    const CONCURENCE = self::ANYTIME;

    public function run() {
        if (!empty($this->config->program)) {
            if (is_array($this->config->program)) {
                $analyzersClass = $this->config->program;
            } else {
                $analyzersClass = array($this->config->program);
            }

            foreach($analyzersClass as $analyzer) {
                if (!$this->rulesets->getClass($analyzer)) {
                    throw new NoSuchAnalyzer($analyzer, $this->rulesets);
                }
            }
        } elseif (!empty($this->config->project_rulesets)) {
            $project_rulesets = $this->config->project_rulesets;

            if (!$analyzersClass = $this->rulesets->getRulesetsAnalyzers($project_rulesets)) {
                throw new NoSuchAnalyzer($project_rulesets, $this->rulesets);
            }
        } else {
            throw new NeedsAnalyzerThema();
        }
        
        foreach($analyzersClass as $id => $analyzerClass) {
            if (substr($analyzerClass, 0, 4) === 'Ext/') {
                $analyzer = $this->rulesets->getInstance($analyzerClass, $this->gremlin, $this->config);
                $analyzerList = $analyzer->getAnalyzerList();

                unset($analyzersClass[$id]);
                if (!empty($analyzerList)) {
                    $analyzersClass = array_merge($analyzersClass, $analyzerList);
                }
            }
        }

        $return = array();
        if ($this->config->style === 'BOOLEAN') {
            $queryTemplate = <<<GREMLIN
g.V().hasLabel("Analysis").has("analyzer", "$analyzer").out().count().is(gt(0))
GREMLIN;
            $vertices = $this->gremlin->query($queryTemplate);

            $return[] = $vertices[0];
        } elseif ($this->config->style === 'COUNTED_ALL') {
            $queryTemplate = <<<GREMLIN
g.V().hasLabel("Analysis").has("analyzer", "$analyzer").out().count()
GREMLIN;
            $vertices = $this->gremlin->query($queryTemplate)->results;

            $return[] = $vertices[0];
        } elseif ($this->config->style === 'ALL') {
            $linksDown = GraphElements::linksAsList();

            $analyzersClassList = makeList($analyzersClass);
            $query = <<<GREMLIN
g.V().hasLabel("Analysis").has("analyzer", within($analyzersClassList)).out("ANALYZED")
.sideEffect{ line = it.get().value("line");
             fullcode = it.get().value("fullcode");
             file="None"; 
             theFunction = "None"; 
             theClass="None"; 
             theNamespace="None"; 
             }
.where( __.until( hasLabel("Project") ).repeat( 
    __.in($linksDown)
      .sideEffect{ if (it.get().label() in ["Function", "Closure", "Arrowfunction", "Magicmethod", "Method"]) { theFunction = it.get().value("code")} }
      .sideEffect{ if (it.get().label() in ["Class", "Classanonymous", "Trait", "Interface"]) { theClass = it.get().value("fullcode")} }
      .sideEffect{ if (it.get().label() == "File") { file = it.get().value("fullcode")} }
       )
)
.map{ ["line":line, "file":file, "fullcode":fullcode, "function":theFunction, "class":theClass, "namespace":theNamespace]; }
GREMLIN;

            $vertices = $this->gremlin->query($query);
            if (isset($vertices->results)) {
                $vertices = $vertices->results;
                print_r($vertices);
            }

            $return = array();
            foreach($vertices as $values) {
                $row = array($values['fullcode'],
                             $values['file'],
                             $values['line'],
                             $values['namespace'],
                             $values['class'],
                             $values['function'],
                            );
                $return[] = $row;
            }
        } elseif ($this->config->style === 'DISTINCT') {
            $queryTemplate = 'g.V().hasLabel("Analysis").has("analyzer", "' . $analyzer . '").out("ANALYZED").values("code").unique()';
            $vertices = $this->gremlin->query($queryTemplate)->results;

            $return = array();
            foreach($vertices as $values) {
                $return[] = array($values);
            }
        } elseif ($this->config->style === 'COUNTED') {
            $queryTemplate = 'g.V().hasLabel("Analysis").has("analyzer", "' . $analyzer . '").out("ANALYZED").groupCount("m").by("code").cap("m")';
            $vertices = $this->gremlin->query($queryTemplate)->results;

            $return = array();
            foreach($vertices[0] as $k => $values) {
                $return[$k] = $values;
            }
        }

        if ($this->config->json === true) {
            $text = json_encode($return);
        } elseif ($this->config->csv === true) {
            $text = array(array('Code', 'File', 'Namespace', 'Class', 'Function'));
            foreach($return as $k => $v) {
                if (is_array($v)) {
                    $text[] = $v;
                } else {
                    $text[] = array($k, $v);
                }
            }
        } elseif ($this->config->html === true || $this->config->odt === true) {
            $text = '';
            foreach($return as $k => $r) {
                if ($this->config->style === 'COUNTED') {
                    $text .= "+ $k => $r\n";
                } else {
                    $text .= "+ $k\n";
                    if (is_array($r)) {
                        $text .= '  + ' . implode("\n  + ", $r) . "\n";
                    } else {
                        $text .= "+ $r\n";
                    }
                }
            }
        } else {
            // count also for $this->config->text == 1
            $text = '';
            foreach($return as $k => $v) {
                if ($this->config->style === 'COUNTED') {
                    $text .= "$k => $v\n";
                } else {
                    $text .= implode(', ', $v) . "\n";
                }
            }
        }

        if ($this->config->output) {
            echo $text;
        }

        switch (1) {
            case $this->config->json :
                $extension = 'json';
                break 1;
            case $this->config->odt :
                $extension = 'odt';
                break 1;
            case $this->config->html :
                $extension = 'html';
                break 1;
            case $this->config->csv :
                $extension = 'csv';
                break 1;
            case $this->config->text :
            default :
                $extension = 'txt';
                break 1;
        }

        if ($this->config->file != '') {
            $name = $this->config->file . '.' . $extension;
            if (file_exists($name)) {
                die( "$name already exists. Aborting\n");
            }

            if ($this->config->format === 'CSV') {
                $csvFile = fopen($name, 'w');
                if (is_resource($csvFile)) {
                    foreach($text as $t) {
                        fputcsv($csvFile, $t);
                    }
                    fclose($csvFile);
                } else {
                    die( "Couldn't open $name file for writing. Aborting\n");
                }
            } else {
                file_put_contents($name, $text);
            }
        }
    }
}

?>
