#!/usr/bin/php
<?php

function check_empty($str)
{
	return(($str));
}

if ($argc > 1)
{
	$arr = explode(" ", $argv[1]);
	foreach ($arr as &$str)
		$str = trim($str);
	$arr = array_filter($arr, "check_empty");
	print(implode(" ", $arr)."\n");
}

?>
