<?php 
  // connect to data base
$connection=mysqli_connect("localhost","root","12345","sign in");
if(mysqli_connect_errno())
{
  // connection error handling
  die("database connection failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
}
?>
