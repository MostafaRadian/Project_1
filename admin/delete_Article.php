<?php


$connect=mysqli_connect("localhost","root","","Dash_Board2");
//2 quariy

$q="DELETE FROM `articles` WHERE id = $_GET[id] ";

$myq=mysqli_query($connect,$q);

$affected= mysqli_affected_rows($connect);

if($affected)
{
  header("LOCATION: article_management.php");//used to return back to the page article_management
}

?>
