<?php
$cn=mysql_connect('localhost','root','') or die('cannot connet to Server');

if($cn)
{
	mysql_select_db('php', $cn) or die('Cannot connect with Database');

}

?>