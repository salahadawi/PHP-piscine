#!/usr/bin/php
<?php

if ($argc == 2 && file_exists($argv[1]))
{
	$file = file_get_contents($argv[1]);
	echo $file;
	preg_match_all("/(?<=<a)[\s\S]*?(?=\/a>)/", $file, $matches);
	print_r($matches);
	$str = implode(" ", $matches[0]);
	print($str);
	preg_match_all("/(\"[\s\S]*?\"|>.+?<)/", $str, $matches);
	print_r($matches);
}

?>

/((?<=>).*?(?=<)| (?<=\").*?(?=\"))/
