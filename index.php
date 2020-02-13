<?php


require 'Figure/Point/Point.php';
require 'Figure/Circle/Circle.php';


use App\Figure\Circle\Circle;
use App\Figure\Color;
use App\Figure\Location;
use App\Figure\Point\Point;


/** @var \App\Figure\Figure[] $data */
$data = [
    new Point(new Location(1000, 200), Color::RED),
    new Point(new Location(1000, 201), Color::RED),
    new Point(new Location(1000, 202), Color::RED),
    new Point(new Location(1000, 203), Color::RED),
    new Point(new Location(1000, 204), Color::RED),
    new Point(new Location(1000, 205), Color::RED),
    new Point(new Location(1000, 206), Color::RED),
    new Point(new Location(1000, 207), Color::RED),
    new Point(new Location(1000, 208), Color::RED),
    new Point(new Location(1000, 209), Color::RED),
    new Circle(new Location(200, 300),100, Color::GREEN),
    new Circle(new Location(200, 250),100, Color::YELLOW),
    new Circle(new Location(200, 200),100, Color::RED),
];


foreach ($data as $figure) {
    $figure->draw();
}