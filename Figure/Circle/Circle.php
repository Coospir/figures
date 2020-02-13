<?php


namespace App\Figure\Circle;

use App\Figure\Figure;
use App\Figure\Location;

require_once 'Figure/Figure.php';

class Circle extends Figure
{

    private $size;

    public function __construct(Location $location, int $size, string $color)
    {
        parent::__construct($location, $color);
        $this->size = $size;
    }

    public function draw()
    {
        $x = $this->getLocation()->getX();
        $y = $this->getLocation()->getY();
        echo "<div style='position: absolute;background: #{$this->getColor()};top: {$y}px;left: {$x}px; border-radius: 50%;  width: {$this->size}px; height: {$this->size}px;'></div>";
    }
}