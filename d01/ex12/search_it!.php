#!/usr/bin/php
<?php

if ($argc > 1)
{
	$count = 2;
	$arrkey = array();
	$arrval = array();
	while ($count < $argc)
	{
		$inputarr = explode(":", $argv[$count]);
		array_push($arrkey, $inputarr[0]);
		array_push($arrval, $inputarr[1]);
		$count++;
	}
	$arr = array_combine($arrkey, $arrval);
	print($arr[$argv[1]]);
	if (array_key_exists($argv[1], $arr))
		print("\n");
}
else
	print("Incorrect Parameters\n")
?>
