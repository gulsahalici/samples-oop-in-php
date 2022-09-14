<?php

function add($a, $b)
{
	if(! is_float($a) || ! is_float($b))
	{
		throw new InvalidArgumentException('Please provide a float');
	}

	return $a + $b;
}

try {
	add(3,[]);
}
catch(Exception $e) {
	echo "Oh well";
}