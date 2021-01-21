<?php
$pid=$_REQUEST["pid"];
require './coonection.php';
$query="delete from product where pid='$pid'";
$n=mysqli_query($con, $query);
if($n>0)
    header("location:productshow.php");
else
    echo "record not deleted";
?>