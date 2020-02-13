<?php


namespace App\Figure\Point;
require 'Figure/Figure.php';


use App\Figure\Figure;


class Point extends Figure
{


    public function draw()
    {
        $x = $this->getLocation()->getX();
        $y = $this->getLocation()->getY();
        echo "<div style='position: absolute;color: #{$this->getColor()};top: {$y}px;left: {$x}px'>.</div>";
    }
}