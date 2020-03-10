#!/usr/bin/php
<?php

function sorting_rule ($arr)
{
	
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
	sort($arr);
	$count = 0;
	while ($arr[$count])
	{
		print($arr[$count]."\n");
		$count++;
	}
}
?>
