<?php

function ft_is_sort($arr)
{
	$arr_sorted = $arr;
	sort($arr_sorted);
	$count = 0;
	while ($arr[$count])
	{
		if ($arr[$count] != $arr_sorted[$count])
			return (0);
		$count++;
	}
	return (1);
}
?>
