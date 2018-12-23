<?php 
session_start();
include_once"db.php";
$uname = trim($_POST['uid']);
$pass = trim($_POST['pass']);
$q="select * from Registration where stu_id='$uname' and password='$pass'";
$s=mysql_query($q);
$o=mysql_fetch_object($s);
$n=mysql_num_rows($s);
if($n>0) {
$result = mysql_query($q);
while($row = mysql_fetch_array($result))
{
	$stu_name = $row['name'];
}
$_SESSION['username']=$uname;
$_SESSION['stu_name']=$stu_name;
//echo "succ";
header("location:index.php");
} else {
//echo "fail";
header("location:login.php?i=1");
}
