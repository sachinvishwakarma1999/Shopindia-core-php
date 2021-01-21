<?php
ob_start();
session_start();
if(isset($_SESSION["email"]))
{
$email=$_SESSION["email"];

$role=$_SESSION["role"];
$password=$_SESSION["password"];
}
 else {
    header("location:index.php")  ;  
}
?>