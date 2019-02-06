<?php

namespace SWAPI\Models;

class Species
{
    /** @var string */
    public $name;
    /** @var string */
    public $classification;
    /** @var string */
    public $designation;
    /** @var string */
    public $average_height;
    /** @var string */
    public $average_lifespan;
    public $eye_colors;
    /** @var string */
    public $hair_colors;
    /** @var string */
    public $skin_colors;
    /** @var string */
    public $language;
    /** @var \SWAPI\Models\Planet */
    public $homeworld;
    /** @var \SWAPI\Models\Character[] */
    public $people;
    /** @var \SWAPI\Models\Film[] */
    public $films;
    /** @var \DateTime */
    public $created;
    /** @var \DateTime */
    public $edited;
    /** @var string */
    public $url;

    public function __construct($url = null)
    {
        $this->url = $url;
    }
}
