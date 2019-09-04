<?php
session_start();


session_destroy();

if(empty($_SESSION['user']))
{
  header("LOCATION:login.php");
}
?>
