<?php
// Cannot instantiate abstract class
abstract class AchievementType
{
	public function name()
	{
		$class = (new ReflectionClass($this))->getShortName();

		return trim(preg_replace('/[A-Z]/', ' $0', $class));

	}

	public function icon() {
		return strtolower(str_replace(' ', '-', $this->name().'.png'));
	}


	abstract function qualifier($user);

}

class FirstThousandPoints extends AchievementType
{
	public function qualifier($user)
	{

	}

}

// Class FirstBestAnswers contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
class FirstBestAnswers extends AchievementType
{
	public function qualifier($user)
	{
		
	}

}

$achievement = new FirstBestAnswers();
echo $achievement->name();
echo $achievement->qualifier('user');