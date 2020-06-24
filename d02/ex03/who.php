#!/usr/bin/php
<?php

function check_empty($str)
{
	return(($str));
}

$users = array();
$users = exec("users");
$users = explode(" ", $users);
foreach ($users as $name)
{
	unset($info);
	exec("last -R ".$name, $info);
	$info = explode(" ", $info[0]);
	$info = array_filter($info, "check_empty");
	$info = array_values($info);
	printf("%-7s\t%5s\t%s %s %s\n", $name, $info[1], $info[3], $info[4], $info[5]);
}

?>