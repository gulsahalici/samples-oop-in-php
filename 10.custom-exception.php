<?php

// class MaximumMembersReached extends Exception
// {
// 	public $message = 'You may not add more than 3 team members';
// }


class TeamException extends Exception
{
	public static function fromTooManyMembers()
	{
		return new static('You may not add more than 3 team members');
	}
}


class Member
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;	
	}
}

class Team
{
	protected $members = [];

	public function add(Member $member)
	{
		if(count($this->members) == 3)
		{
			throw TeamException::fromTooManyMembers();
			// throw new MaximumMembersReached();
		}

		$this->members[] = $member;
	}
}

class TeamMembersController
{
	public function store()
	{
		$team = new Team();

		try {
			$team->add(new Member('Ali'));
			$team->add(new Member('Ahmet'));
			$team->add(new Member('Ayşe'));
			$team->add(new Member('Aylin'));
		}
		catch(Exception $e) {
			var_dump($e->getMessage());
		}
	}
}

(new TeamMembersController())->store();