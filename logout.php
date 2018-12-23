<?php
session_start();
session_destroy();
if(strlen($page) > 1)
{
header("location:index.php");
}
else
{
header("location:index.php");
}
?> 