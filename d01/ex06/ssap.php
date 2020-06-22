#!/usr/bin/php
<?php

function check_whitespace($str)
{
	return(($str));
}

function ft_split($str)
{
	$arr = explode(" ", $str);
	$arr = array_filter($arr, "check_whitespace");
	return($arr);
}

if ($argc > 1)
{
	$count = 1;
	$arr = array();
	while ($count < $argc)
	{
		$arr = array_merge($arr, ft_split($argv[$count]));
		$count++;
	}
	sort($arr);
	$count = 0;
	while ($count < count($arr))
	{
		print($arr[$count]."\n");
		$count++;
	}
}
?>
