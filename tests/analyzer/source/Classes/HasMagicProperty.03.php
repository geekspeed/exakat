<?php 

trait xNoMagic {
    public $defined = 1;
    
    function y() {
        $this->defined = 1;
        $this->undefined = 2;
        
        $y->undefinedButNotInternal = 3;
        
        // static calls
        x::$y = 2;
    }
}

trait xWithMagic {
    public $defined = 1;
    
    function y() {
        $this->defined = 1;
        $this->undefinedButMagic = 2;
        
        $y->undefinedButNotInternal = 3;
        
        // static calls
        x::$y = 2;
    }
    
    function __get($name) {}
}

trait xWithMagic2 {
    public $defined = 1;
    
    function y() {
        $this->defined = 1;
        $this->undefinedButMagic = 2;
        
        $y->undefinedButNotInternal = 3;
        
        // static calls
        x::$y = 2;
    }
    
    function __set($name, $value) {}
}

?>