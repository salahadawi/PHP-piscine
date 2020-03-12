<?php

if ($_SERVER[PHP_AUTH_USER] == "zaz" && $_SERVER[PHP_AUTH_PW] == "Ilovemylittleponey")
{
	echo("<html><body>");
	readfile("../img/42.png");
}
else
{
	header("WWW-Authenticate: Basic realm=''Member area''");
}

?>
