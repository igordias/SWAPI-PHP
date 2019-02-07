<?php
require_once dirname(__DIR__, 1) . '/vendor/autoload.php';
require_once dirname(__DIR__, 1) . '/view/View.php';
use SWAPI\SWAPI;

class MainController
{
    public $currentPage;
    public $swapi;
    
    public function __construct(){
        $this->swapi = new SWAPI();
        if(!isset($_GET["page"])){
            $pageRequested = 'index';
        }else{
            $pageRequested = $_GET["page"];
        }
        $this->buildPage($pageRequested);
    }

    function buildPage($page){
        switch($page){
            case 'index':
                $this->buildIndex();
                break;
            case 'movie':
                $this->buildMoviePage();
                break;
            case 'planet':
                $this->buildPlanetPage();
                break;
            case 'character':
                $this->buildCharPage();
                break;
            case 'vehicle':
                $this->buildVehiclePage();
                break;
            case 'species':
                $this->buildSpeciesPage();
                break;
        }
    }

    function buildIndex(){
        $data["films"] = $this->swapi->films()->index();
        $view = new View('IndexView', $data);
    }

    function buildMoviePage(){
        if(isset($_GET["film"])){
            $episode_id = $_GET["film"];
        }else{
            $this->throw404();
            die();
        }
        try {
            $data["film"] = $this->swapi->films()->get($episode_id);
        
            $this->gatherAllData($data["film"]->species);
            $this->gatherAllData($data["film"]->starships);
            $this->gatherAllData($data["film"]->vehicles);
            $this->gatherAllData($data["film"]->characters);
            $this->gatherAllData($data["film"]->planets);

            $view = new View('MovieView', $data);
        } catch (GuzzleHttp\Exception\ClientException $exception) {
            $this->throw404();
        }
    }
    function buildPlanetPage(){
        if(isset($_GET["planet"])){
            $planet_id = $_GET["planet"];
        }else{
            $this->throw404();
            die();
        }
        try {
            $data["planet"] = $this->swapi->planets()->get($planet_id);
        
            $this->gatherAllData($data["planet"]->residents);
            $this->gatherAllData($data["planet"]->films);

            $view = new View('PlanetView', $data);
        } catch (GuzzleHttp\Exception\ClientException $exception) {
            $this->throw404();
        }
    }

    function buildCharPage(){
        if(isset($_GET["char"])){
            $char_id = $_GET["char"];
        }else{
            $this->throw404();
            die();
        }
        try {
            $data["character"] = $this->swapi->characters()->get($char_id);
            
            $data["character"]->homeworld = $this->swapi->getFromUri($data["character"]->homeworld->url);

            $this->gatherAllData($data["character"]->films);
            $this->gatherAllData($data["character"]->species);
            $this->gatherAllData($data["character"]->starships);
            $this->gatherAllData($data["character"]->vehicles);

            $view = new View('CharacterView', $data);
        } catch (GuzzleHttp\Exception\ClientException $exception) {
            $this->throw404();
        }
    }

    function buildVehiclePage(){
        if(isset($_GET["vehicle"])){
            $vehicle_id = $_GET["vehicle"];
        }else{
            $this->throw404();
            die();
        }
        try {
            $data["vehicle"] = $this->swapi->vehicles()->get($vehicle_id);
            
            $this->gatherAllData($data["vehicle"]->films);
            $this->gatherAllData($data["vehicle"]->pilots);

            $view = new View('VehicleView', $data);
        } catch (GuzzleHttp\Exception\ClientException $exception) {
            $this->throw404();
        }
    }

    function buildSpeciesPage(){
        if(isset($_GET["species"])){
            $species_id = $_GET["species"];
        }else{
            $this->throw404();
            die();
        }
        try {
            $data["species"] = $this->swapi->species()->get($species_id);
            
            $data["species"]->homeworld = $this->swapi->getFromUri($data["species"]->homeworld->url);

            $this->gatherAllData($data["species"]->films);
            $this->gatherAllData($data["species"]->people);

            $view = new View('SpeciesView', $data);
        } catch (GuzzleHttp\Exception\ClientException $exception) {
            $this->throw404();
        }
    }

    function throw404(){
        $view = new View('404', null);
    }

    function gatherAllData(&$obj){
        foreach($obj as &$o){
            $o = $this->swapi->getFromUri($o->url);
            $o->id = $this->swapi->extractIdFromUrl($o->url);
        }
    }

}
?>