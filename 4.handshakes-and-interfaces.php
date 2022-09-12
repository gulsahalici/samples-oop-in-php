<?php

interface Newsletter
{
	public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
	
	public function subscribe($email)
	{
		die("subscribing with Campaign Monitor.");
	}

}

class Drip implements Newsletter
{
	public function subscribe($email)
	{
		die("subscribing with Drip.");	
	}
}

class NewsletterSubscriptionsController
{
	public function store(Newsletter $newsletter)
	{
		$email = 'gulsah.alici1@gmail.com';

		$newsletter->subscribe($email);
	}
}

$controller = new NewsletterSubscriptionsController();

$controller->store(new Drip());