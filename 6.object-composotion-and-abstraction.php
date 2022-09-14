<?php

class Subscription
{
	protected Gateway $gateway;

	public function __construct(Gateway $gateway)
	{
		$this->gateway = $gateway;
	}

	public function create()
	{
		//
	}

	public function cancel()
	{
		$this->gateway->findCustomer();
	}

	public function invoice()
	{
		$this->gateway->findSubscriptionByCustomer();
	}

	public function swap($newPlan)
	{
		//
	}
}

interface Gateway
{
	public function findCustomer();
	public function findSubscriptionByCustomer();
}


class StripeGateway implements Gateway
{
	public function findCustomer()
	{
		echo "stripe gateway find customer";
	}

	public function findSubscriptionByCustomer()
	{
		echo "stripe gateway find subscription by customer";
	}
}

class BraintreeGateway implements Gateway
{	
	public function findCustomer()
	{
		echo "braintree gateway find customer";
	}

	public function findSubscriptionByCustomer()
	{
		echo "braintree gateway find subscription by customer";
	}
}

$subscription1 = new Subscription(new StripeGateway());
$subscription1->invoice(); // this prints "stripe gateway find subscription by customer"

$subscription2 = new Subscription(new BraintreeGateway());
$subscription2->cancel(); // this prints "braintree gateway find customer"

