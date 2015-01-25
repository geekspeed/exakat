<?php

namespace Tokenizer;

class Arguments extends TokenAuto {
    static public $operators = array('T_COMMA');
    static public $atom = 'Arguments';

    public function _check() {
        // @note arguments separated by ,
        $this->conditions = array(-2 => array('token'   => array('T_OPEN_PARENTHESIS', 'T_ECHO', 'T_VAR', 'T_GLOBAL', 'T_EXTENDS')),
                                  -1 => array('atom'    => 'yes'),
                                   0 => array('token'   => Arguments::$operators,
                                              'atom'    => 'none'),
                                   1 => array('atom'    => 'yes',
                                              'check_for_arguments' => array('String', 'Integer', 'Boolean', 'Null', 'Addition', 
                                                                             'Multiplication', 'Property', 'Methodcall', 
                                                                             'Staticmethodcall', 'Staticconstant', 'Staticproperty',
                                                                             'New', 'Functioncall', 'Nsname', 'Identifier', 'Void',
                                                                             'Variable', 'Array', 'Assignation', 'Typehint', 'Keyvalue',
                                                                             'Float', 'Concatenation', 'Parenthesis', 'Cast', 'Sign')),
                                   2 => array('token'   => array('T_CLOSE_PARENTHESIS', 'T_COMMA', 'T_SEMICOLON', 'T_CLOSE_TAG', 
                                                                 'T_OPEN_CURLY'))
                                 );
        
        $this->actions = array('to_argument' => true,
                               'atom'        => 'Arguments');
        $this->checkAuto();

        return false;
    }

    public function fullcode() {
        return <<<GREMLIN

s = [];
fullcode.out("ARGUMENT").sort{it.rank}._().each{ s.add(it.fullcode); };

if (s.size() == 0) {
    s = '';
} else {
    fullcode.setProperty('fullcode', s.join(", "));
}

// note : parenthesis are set in arguments (above), if needed.

GREMLIN;
    }
}
?>
