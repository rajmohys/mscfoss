// hello this is just for testing
<?php

$mysql_host='localhost';
$mysql_user='root';
$mysql_password='moni';

if (!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
{
	die('OOPS, there is connection error');
}

else
{
	if (@mysql_select_db('student'))
		{echo 'Connection SUCCESS';}
		else
		{ die('Cannot Connect to DB');}
}


?>