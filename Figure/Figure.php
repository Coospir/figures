<?php


namespace App\Figure;

require 'Location.php';
require 'Color.php';

abstract class Figure
{

    /**
     * @var Location
     */
    private $location;

    /**
     * @var string
     */
    private $color;

    /**
     * Figure constructor.
     *
     * @param Location $location
     * @param string   $color
     */
    public function __construct(Location $location, string $color)
    {
        $this->location = $location;
        $this->color = $color;
    }


    abstract public function draw();


    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }
}