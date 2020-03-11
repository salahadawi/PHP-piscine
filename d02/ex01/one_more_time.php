#!/usr/bin/php
<?php

if ($argc > 1)
{
	date_default_timezone_set('Europe/Paris');
	$arr = explode(" ", $argv[1]);
	array_shift($arr);
	$months = array("0", "janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet",
	"aout", "septembre", "octobre", "novembre", "decembre");
	$arr[1] = array_search(strtolower($arr[1]), $months);
	$str = implode(".", $arr);
	$time = strtotime($str);
	if ($time !== false)
		print($time)."\n";
	else
		print("Wrong Format\n");
}

?>
