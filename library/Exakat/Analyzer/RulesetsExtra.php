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


namespace Exakat\Analyzer;

use Exakat\Analyzer\Analyzer;
use Exakat\Analyzer\RulesetsInterface;
use Exakat\Autoload\Autoloader;

class RulesetsExtra implements RulesetsInterface {
    private $extra_rulesets  = array();

    public function __construct(array $extra_rulesets = array()) {
        $this->extra_rulesets = $extra_rulesets;
    }

    public function getRulesetsAnalyzers(?array $ruleset = null) {
        // Main installation
        if ($ruleset === null) {
            if (empty($this->extra_rulesets)) {
                return array();
            } else {
                return array_unique(array_merge(...array_values($this->extra_rulesets)));
            }
        } elseif (is_array($ruleset)) {
            $return = array();
            foreach($ruleset as $t) {
                $return[] = $this->extra_rulesets[$t] ?? array();
            }

            if (empty($return)) {
                return array();
            } else {
                return array_unique(array_merge(...$return));
            }
        }
    }

    public function getRulesetForAnalyzer($analyzer) {
        $return = array();
        foreach($this->extra_rulesets as $ruleset => $analyzers) {
            if (in_array($analyzer, $analyzers)) {
                $return[] = $ruleset;
            }
        }
        
        return $return;
    }

    public function getRulesetsForAnalyzer($analyzer = null) {
        $return = array();

        if ($analyzer === null) {
            foreach($this->extra_rulesets as $ruleset => $analyzers) {
                foreach($analyzers as $analyzer)  {
                    array_collect_by($return, $analyzer, $ruleset);
                }
            }
            
            return $return;
        }

        foreach($this->extra_rulesets as $ruleset => $analyzers) {
            if (in_array($analyzer, $analyzers)) {
                $return[] = $ruleset;
            }
        }

        return $return;
    }

    public function getSeverities() {
        $return = array();

        return $return;
    }

    public function getTimesToFix() {
        $return = array();

        return $return;
    }

    public function getFrequences() {
        $return = array();

        return $return;
    }

    public function listAllAnalyzer($folder = null) {
        // This is not providing any new analysers.
        return array();
    }

    public function listAllRulesets($ruleset = null) {
        return array_keys($this->extra_rulesets);
    }

    public function getClass($name) {
        // accepted names :
        // PHP full name : Analyzer\\Type\\Class
        // PHP short name : Type\\Class
        // Human short name : Type/Class
        // Human shortcut : Class (must be unique among the classes)

        if (strpos($name, '\\') !== false) {
            if (substr($name, 0, 16) === 'Exakat\\Analyzer\\') {
                $class = $name;
            } else {
                $class = "Exakat\\Analyzer\\$name";
            }
        } elseif (strpos($name, '/') !== false) {
            $class = 'Exakat\\Analyzer\\' . str_replace('/', '\\', $name);
        } else {
            $class = $name;
        }

        if (!class_exists($class)) {
            return false;
        }

        $actualClassName = new \ReflectionClass($class);
        if ($class === $actualClassName->getName()) {
            return $class;
        } else {
            // problems with the case
            return false;
        }
    }

    public function getSuggestionRuleset(array $rulesets) {
        $list = $this->listAllRulesets();

        return array_filter($list, function ($c) use ($rulesets) {
            foreach($rulesets as $ruleset) {
                $l = levenshtein($c, $ruleset);
                if ($l < 8) {
                    return true;
                }
            }
            return false;
        });
    }

    public function getSuggestionClass($name) {
        return array_filter($this->listAllAnalyzer(), function ($c) use ($name) {
            $l = levenshtein($c, $name);

            return $l < 8;
        });
    }

    public function getAnalyzerInExtension($name) {
        return array();
    }
}
?>
