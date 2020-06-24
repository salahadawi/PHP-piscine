#!/usr/bin/php
<?php

if ($argc == 2)
{
	$page = file_get_contents($argv[1]);
	$folder = preg_replace("/https?:\/\//", "", $argv[1]);
	if (!file_exists($folder))
		mkdir($folder);
	preg_match_all("/(?<=img src=\").+?(?=\")/", $page, $matches);
	foreach ($matches[0] as $link)
	{
		if (substr($link, 0, 4) !== "http")
			$link = $argv[1].$link;
		file_put_contents($folder."/".basename($link), file_get_contents($link));
	}
}
?>