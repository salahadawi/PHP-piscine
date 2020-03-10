#!/usr/bin/php
<?php

function check_whitespace($str)
{
	return(($str));
}

if ($argc > 1)
{
	$arr = explode(" ", $argv[1]);
	$str = implode(" ", array_filter($arr, "check_whitespace"));
	$arr = explode(" ", $str);
	array_push($arr, array_shift($arr));
	$str = implode(" ", $arr);
	print($str."\n");
}
?>
