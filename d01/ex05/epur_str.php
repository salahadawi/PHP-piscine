#!/usr/bin/php
<?php

function check_whitespace($str)
{
	return(($str));
}

if ($argc == 2)
{
	$arr = explode(" ", $argv[1]);
	print(implode(" ", array_filter($arr, "check_whitespace")));
	print("\n");
}
?>
