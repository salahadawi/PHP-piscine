<?php

function handle_error()
{
	echo "ERROR\n";
	return;
}

if ($_POST['submit'] == "OK" && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw'])
{
	if (!file_exists("../htdocs/private/passwd"))
		return handle_error();
	$data = unserialize(file_get_contents("../htdocs/private/passwd"));
	$password_changed = 0;
	foreach ($data as &$user)
	{
		if ($user['login'] === $_POST['login'])
		{
			if ($user['passwd'] === hash("whirlpool", $_POST['oldpw']))
			{
				$user['passwd'] = hash("whirlpool", $_POST['newpw']);
				$password_changed = 1;
			}
			else
				return handle_error();
		}
	}
	if (!$password_changed)
		return handle_error();
	file_put_contents("../htdocs/private/passwd", serialize($data));
	echo "OK\n";
}
else
	return handle_error();
?>