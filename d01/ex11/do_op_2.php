#!/usr/bin/php
<?php

function check_whitespace($str)
{
	return(($str) || is_numeric($str));
}

if ($argc == 2)
{
	$arr = array_filter(explode(" ", $argv[1]), "check_whitespace");
	$arr = array_values($arr);
	if (count($arr) != 3)
	{
		print ("Syntax Error\n");
		return ;
	}
	$num1 = $arr[0];
	$op = $arr[1];
	$num2 = $arr[2];
	if ($op == "+")
		print ($num1 + $num2);
	else if ($op == "-")
		print ($num1 - $num2);
	else if ($op == "*")
		print ($num1 * $num2);
	else if ($op == "/")
	{
		if ($num2 == 0)
		{
			print ("Syntax Error\n");
			return ;
		}
		print ($num1 / $num2);
	}
	else if ($op == "%")
	{
		if ($num2 == 0)
		{
			print ("Syntax Error\n");
			return ;
		}
		print ($num1 % $num2);
	}
	print("\n");
}
else
	print("Incorrect Parameters\n")
?>
