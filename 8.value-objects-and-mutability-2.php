<?php

class Coordinate
{
	public $x;
	public $y;

	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}
}

function distance(Coordinate $begin, Coordinate $end)
{
	$distance = sqrt(($begin->x - $end->x)**2 + ($begin->y - $end->y)**2);
	return $distance;
}

echo distance(new Coordinate(2, 0), new Coordinate(8, 0));