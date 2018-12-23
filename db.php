<?php
$dbhost='localhost';
$dbuser='gfincuct_jrss';
$dbpass="rahul!123singh";
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die ("Database Problem");
mysql_select_db('gfincuct_jrss') or die ("Error ".mysql_error());
?>