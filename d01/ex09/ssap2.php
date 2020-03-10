#!/usr/bin/php
<?php

function sorting_rule ($arr)
{
	natcasesort($arr);
	return ($arr);
}

function check_alpha ($str)
{
	return (ctype_alpha($str));
}

function check_number ($str)
{
	return (is_numeric($str));
}

function check_other ($str)
{
	return (!(is_numeric($str)) && !(ctype_alpha($str)));
}

if ($argc > 1)
{
	$count = 1;
	$arr = array();
	while ($count < $argc)
	{
		$arr = array_merge($arr, explode(" ", $argv[$count]));
		$count++;
	}
	$arr1 = array_filter($arr, "check_alpha");
	$arr2 = array_filter($arr, "check_number");
	$arr3 = array_filter($arr, "check_other");
	natcasesort($arr1);
	sort($arr2, 2);
	sort($arr3);
	$arr1 = array_values($arr1);
	$arr = array_merge($arr1, $arr2, $arr3);
	$count = 0;
	while ($arr[$count])
	{
		print($arr[$count]."\n");
		$count++;
	}
}
?>
