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

use XmlWriter;
use Exakat\Analyzer\Analyzer;
use Exakat\Exakat;
use Exakat\Reports\Helpers\Results;

/**
 * Xml report for PHP_CodeSniffer.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gabriele Santini <gsantini@sqli.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2009-2014 SQLI <www.sqli.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Xml report for PHP_CodeSniffer.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gabriele Santini <gsantini@sqli.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2009-2014 SQLI <www.sqli.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Xml extends Reports {
    private $cachedData = '';

    const FILE_EXTENSION = 'xml';
    const FILE_FILENAME  = 'exakat';

    public function generateFileReport($report) {
        $out = new XMLWriter();
        $out->openMemory();
        $out->setIndent(true);

        if ($report['errors'] === 0 && $report['warnings'] === 0) {
            // Nothing to print.
            return false;
        }

        $out->startElement('file');
        $out->writeAttribute('name', $report['filename']);
        $out->writeAttribute('errors', $report['errors']);
        $out->writeAttribute('warnings', $report['warnings']);
        $out->writeAttribute('fixable', $report['fixable']);

        foreach ($report['messages'] as $line => $lineErrors) {
            foreach ($lineErrors as $column => $colErrors) {
                foreach ($colErrors as $error) {

                    $error['type'] = strtolower($error['type']);

                    $out->startElement($error['type']);
                    $out->writeAttribute('line', $line);
                    $out->writeAttribute('column', $column);
                    $out->writeAttribute('source', $error['source']);
                    $out->writeAttribute('severity', $error['severity']);
                    $out->writeAttribute('fixable', $error['fixable']);
                    $out->text($error['message']);
                    $out->endElement();
                    $this->count();
                }
            }
        }

        $out->endElement();
        $this->cachedData .= $out->flush();
    }

    public function generate($folder, $name = self::FILE_FILENAME) {
        $list = $this->rulesets->getRulesetsAnalyzers($this->themesToShow);

        $resultsAnalyzers = new Results($this->sqlite, $list);
        $resultsAnalyzers->load();

        $results = array();
        $titleCache = array();
        $severityCache = array();
        foreach($resultsAnalyzers->toArray() as $row) {
            if (!isset($results[$row['file']])) {
                $file = array('errors'   => 0,
                              'warnings' => 0,
                              'fixable'  => 0,
                              'filename' => $row['file'],
                              'messages' => array());
                $results[$row['file']] = $file;
            }

            if (!isset($titleCache[$row['analyzer']])) {
                $analyzer = $this->rulesets->getInstance($row['analyzer'], null, $this->config);

                $titleCache[$row['analyzer']]    = $this->getDocs($row['analyzer'], 'name');
                $severityCache[$row['analyzer']] = $this->getDocs($row['analyzer'], 'severity');
            }

            $message = array('type'     => 'warning',
                             'source'   => $row['analyzer'],
                             'severity' => $severityCache[$row['analyzer']],
                             'fixable'  => 'fixable',
                             'message'  => $titleCache[$row['analyzer']],
                             'fullcode' => $row['fullcode']);

            if (!isset($results[ $row['file'] ]['messages'][ $row['line'] ])) {
                $results[ $row['file'] ]['messages'][ $row['line'] ] = array(0 => array());
            }
            $results[ $row['file'] ]['messages'][ $row['line'] ][0][] = $message;

            ++$results[ $row['file'] ]['warnings'];
        }

        foreach($results as $file) {
            $this->generateFileReport($file);
        }

        $return = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL . '<phpcs version="' . Exakat::VERSION . '">' . PHP_EOL . $this->cachedData . '</phpcs>' . PHP_EOL;

        if ($name === self::STDOUT) {
            return $return;
        } else {
            file_put_contents($folder . '/' . $name . '.' . self::FILE_EXTENSION, $return);
        }
    }
}

?>