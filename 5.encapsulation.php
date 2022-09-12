<?php

class TennisMatch
{
	// only this method is exposed, others are used internal
	
	public function score($num1, $num2) 
	{
		if($this->inDeuce($num1, $num2))
		{
			return 'Match in in deuce';
		}
		else if($this->hasWinner($num1, $num2))
		{

			return 'Match has a winner';
		}
	}

	protected function hasWinner($num1, $num2)
	{
		if($num1 != $num2) 
		{
			return true;
		}

		return false;
	}

	protected function inDeuce($num1, $num2)
	{
		if($num1 == $num2) 
		{
			return true;
		}

		return false;
	}
}


$match = new TennisMatch();

// This returns: Call to protected method TennisMatch::hasWinner() from global scope
// var_dump($match->hasWinner(2,3)); 

var_dump($match->score(3,3)); 




// access a private class
// namespace App;

// class Person
// {
// 	public $name;

// 	public function __construct($name)
// 	{
// 		$this->name = $name;
// 	}

// 	public function job()
// 	{
// 		return 'Software Developer';
// 	}

// 	private function thingsThatKeepUpAtNight()
// 	{
// 		return 'We are all going to die and that is terrifying.';
// 	}
// }

// $method = new \ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
// $method->setAccessible(true);


// $person = new Person('Bob');

// // This returns: "Call to private method App\Person::thingsThatKeepUpAtNight() from global scope" 
// // var_dump($person->thingsThatKeepUpAtNight());

// var_dump($method->invoke($person));