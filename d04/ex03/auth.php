<?php

function auth($login, $passwd)
{
	$data = unserialize(file_get_contents("../htdocs/private/passwd"));
	foreach ($data as &$user)
	{
		if ($user['login'] === $login)
		{
			if ($user['passwd'] === hash("whirlpool", $passwd))
				return TRUE;
		}
	}
	return FALSE;
}

?>