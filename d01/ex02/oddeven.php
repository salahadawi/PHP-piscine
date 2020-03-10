#!/usr/bin/php
<?php

$input = fopen("php://stdin", "r");
while (!feof($input))
{
	echo("Enter a number: ");
	$number = fgets($input);
	if ($number)
	{
		$number = str_replace("\n", "", $number);
		if (is_numeric($number))
		{
			if ($number % 2)
				echo("The number ".$number." is odd");
			else
				echo("The number ".$number." is even");
		}
		else
			echo("'".$number."' is not a number");
		echo("\n");
	}
}
echo ("\n");
?>
