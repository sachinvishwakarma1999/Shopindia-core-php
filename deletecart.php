
<?php
 require'./sessionmanage.php'
?>         
<?php
require './coonection.php';
$email=$_REQUEST["email"];
extract($_REQUEST);
$s="delete from cart where email='$email'";
mysqli_query($con, $s);
$n=  mysqli_affected_rows($con);

if($n>0)
    header('location:cart.php');
else
    echo "Try again";

?>
