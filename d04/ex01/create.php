<?php

if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['passwd'])
{
	if (!file_exists("../htdocs/private/passwd"))
		mkdir("..//htdocs/private", 0777, true);
	$data = unserialize(file_get_contents("../htdocs/private/passwd"));
	foreach ($data as $user)
	{
		if ($user['login'] === $_POST['login'])
		{
			echo "ERROR\n";
			return;
		}
	}
	$data[] = array("login" => $_POST['login'], "passwd" => hash('whirlpool', $_POST['passwd']));
	file_put_contents("../htdocs/private/passwd", serialize($data));
	echo "OK\n";
}
else
{
	echo "ERROR\n";
	return;
}
?>