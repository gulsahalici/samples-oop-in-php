<?php
// Avoids primitive obsession - and readability
// Help with consistency
// Immutable

class Age
{
	private $age;

	public function __construct($age)
	{
		if($age < 0 || $age > 120)
		{
			throw new InvalidArgumentException('That makes no sense');
		}

		$this->age = $age;
	}

	public function increment()
	{
		return new self($this->age + 1);
		//$this->age += 1;
	}

	public function get()
	{
		return $this->age;
	}
}

function register(string $name, Age $age)
{

}

$age = new Age(25);

$age = $age->increment();
var_dump($age->get());
//register('Gulsah', $age);