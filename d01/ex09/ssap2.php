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

function custom_sort($a, $b)
{
	$size = (strlen($a) > strlen($b)) ? strlen($b) : strlen($a);
	$a = strtolower($a);
	$b = strtolower($b);
	$i = 0;
	while ($i < $size && $a[$i] == $b[$i])
		$i++;
	$a_char = ($i == strlen($a)) ? chr(0) : $a[$i];
	$b_char = ($i == strlen($b)) ? chr(0) : $b[$i];
	$a_ascii = ord($a_char);
	$b_ascii = ord($b_char);
	if ($a_ascii == 0 || $b_ascii == 0)
		return ($a_ascii - $b_ascii);
	if (!ctype_alpha($a_char))
		$a_ascii += 1000;
	if (!ctype_alnum($a_char))
		$a_ascii += 2000;
	if (!ctype_alpha($b_char))
		$b_ascii += 1000;
	if (!ctype_alnum($b_char))
		$b_ascii += 2000;
	return($a_ascii - $b_ascii);
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
	usort($arr, "custom_sort");
	$count = 0;
	while ($count < count($arr))
	{
		print($arr[$count]."\n");
		$count++;
	}
}
?>
