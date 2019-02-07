<?php

namespace SWAPI\Models;

class Vehicle
{
    /** @var string */
    public $name;
    /** @var string */
    public $model;
    /** @var string */
    public $manufacturer;
    /** @var int */
    public $cost_in_credits;
    /** @var float */
    public $length;
    /** @var float */
    public $max_atmosphering_speed;
    /** @var string */
    public $crew;
    /** @var string */
    public $passengers;
    /** @var string */
    public $cargo_capacity;
    /** @var string */
    public $consumables;
    /** @var string */
    public $vehicle_class;
    /** @var string[] */
    public $pilots;
    /** @var \SWAPI\Models\Film[] */
    public $films = [];
    /** @var \DateTime */
    public $created;
    /** @var \DateTime */
    public $edited;
    /** @var string */
    public $url;

    public $id;

    public function __construct($url = null)
    {
        $this->url = $url;
    }
}
