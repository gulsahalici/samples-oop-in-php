<?php

class Collection
{
	public $items;

	public function __construct($items = [])
	{
		$this->items = $items;
	}

	public function sum($key)
	{
		return array_sum(array_column($this->items, $key));
	}

}

class VideosCollection extends Collection
{
	public function length()
	{
		return $this->sum('length');
	}
}

class Video
{
	public $title;
	public $length;

	public function __construct($title, $length) {
		$this->title = $title;
		$this->length = $length;
	}

}

$videos = new VideosCollection([
	new Video('Video Title 1', 100),
	new Video('Video Title 2', 200),
	new Video('Video Title 3', 300)
]);

echo $videos->length();


// ------------------------------
// Sample 1

// class CoffeeMaker
// {
// 	public function brew()
// 	{
// 		var_dump('Brewed coffee.');
// 	}
// }

// class SpecialtyCoffeeMaker extends CoffeeMaker
// {
// 	public function brewLatte()
// 	{
// 		var_dump('Brewed latte coffee.');
// 	}
// }

// (new SpecialtyCoffeeMaker())->brew();
// (new SpecialtyCoffeeMaker())->brewLatte();