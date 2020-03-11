#!/usr/bin/php
<?php

if ($argc == 2 && file_exists($argv[1]))
{
	$file = file_get_contents($argv[1]);
	preg_match_all("/(?<=<a)[\s\S]*?(?=\/a>)/", $file, $matches);
	$str = implode(" ", $matches[0]);
	preg_match_all("/(\"[\s\S]*?\"|>.+?<)/", $str, $matches);
	$replacement = $matches[0];
	foreach ($replacement as &$line)
		$line = strtoupper($line);
	foreach ($matches[0] as &$line)
		$line = "/".$line."/";
	$file = preg_replace($matches[0], $replacement, $file);
	print($file);
}

?>
