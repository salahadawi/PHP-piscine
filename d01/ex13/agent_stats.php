#!/usr/bin/php
<?php

if ($argc == 2)
{
	$input = fopen("php://stdin", "r");
	$arr = array();
	while (!feof($input))
	{
		$line = trim(fgets($input));
		array_push($arr, $line);
	}
	if ($argv[1] == "average")
	{
		$average = 0;
		$count = 0;
		foreach($arr as $value)
		{
			if (!(strpos($value, "moulinette")))
			{
				$num = substr($value, strpos($value, ";") + 1, strpos($value, ";", strpos($value, ";") + 1) - strpos($value, ";") - 1);
				if (is_numeric($num))
				{
					$average += $num;
					$count++;
				}
			}
		}
		print($average / $count."\n");
	}
	if ($argv[1] == "average_user")
	{

	}
}
else
	print("\n");
?>
