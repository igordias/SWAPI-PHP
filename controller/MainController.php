<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
use SWAPI\SWAPI;

class MainController
{
    public $swapi;
    
    public function __construct(){
        $this->swapi = new SWAPI();
    }
}
?>