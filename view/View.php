<?php

class View
{
    private $data;

    public function __construct($viewname, $data) {
        $this->data = $data;
        $filename = dirname(__DIR__, 1) . "\\view\\" . $viewname . ".php";
        
        if(is_readable($filename)){
            include_once(dirname(__DIR__, 1) . "\\view\\" . $viewname . ".php");
        }
    }
}
?>