
<?php
 require'./sessionmanage.php'
?>         
<html>
    <head>
        <title>Slider Change</title>
		
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="mycss.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
            <?php
            require'./adminheader.php';
            ?>
<?php
$id=$_REQUEST["id"];
require'./coonection.php';
$q="select * from slider where id='$id'";
$result=mysqli_query($con,$q);
$c=mysqli_fetch_array($result);

?>
<form method="post" enctype="multipart/form-data">
    <table align="center" border="1">
        <tr>
            <td><input type="file" name="slider1">
                <input type="checkbox" name="r1" checked hidden>
            <img src="<?php echo $c[1]; ?>" width="50px" height="50px"></td>
       </tr>
       <tr>
           <td colspan="2" align="center"><input type="submit" name="submit"></input></td>
       </tr>
    </table>
</form>
<?php
if (isset($_REQUEST["submit"])){
    extract($_REQUEST);
    if (isset($_REQUEST["r1"])){
    $fnmone=$_FILES["slider1"]["name"];
    $sourceone=$_FILES["slider1"]["tmp_name"];
    $slider1="uploads/".$fnmone;
    move_uploaded_file($sourceone,$slider1);
    }
 else{
     $filepath=$_REQUEST["slider1"];
 }
   require'./coonection.php';
  $query="update  slider set slider1='$slider1' where id='$id'";
    mysqli_query($con, $query);
   $n=mysqli_affected_rows($con);
   
   if ($n>0){
       header('location:adminhome.php');
   }
 else {
       echo "<script>alert('try again')</script>";
   }
}

?>
<form method="post" enctype="multipart/form-data">
    <table align="center" border="1">
        <tr>
            <td><input type="file" name="slider2">
                <input type="checkbox" name="r2" checked hidden>
            <img src="<?php echo $c[2]; ?>" width="50px" height="50px"></td>
       </tr></td>
       <tr>
           <td colspan="2" align="center"><input type="submit" name="submit2"></input></td>
       </tr>
    </table>
</form>
<?php
if (isset($_REQUEST["submit2"])){
    extract($_REQUEST);
    if (isset($_REQUEST["r2"])){
    $fnm2=$_FILES["slider2"]["name"];
    $sourceone=$_FILES["slider1"]["tmp_name"];
    $slider2="uploads/".$fnm2;
    move_uploaded_file($sourceone,$slider2);
    }
 else{
     $filepath=$_REQUEST["slider2"];
 }
   require'./coonection.php';
  $query="update  slider set slider2='$slider2' where id='$id'";
    mysqli_query($con, $query);
   $n=mysqli_affected_rows($con);
   
   if ($n>0){
       header('location:adminhome.php');
   }
 else {
       echo "<script>alert('try again')</script>";
   }
}

?>


<form method="post" enctype="multipart/form-data">
    <table align="center" border="1">
        <tr>
            <td><input type="file" name="slider3">
                <input type="checkbox" name="r3" checked hidden>
            <img src="<?php echo $c[3]; ?>" width="50px" height="50px"></td>
       </tr></td>
       <tr>
           <td colspan="2" align="center"><input type="submit" name="submit3"></input></td>
       </tr>
    </table>
</form>
<?php
if (isset($_REQUEST["submit3"])){
    extract($_REQUEST);
    if (isset($_REQUEST["r3"])){
    $fnm3=$_FILES["slider3"]["name"];
    $sourceone=$_FILES["slider3"]["tmp_name"];
    $slider3="uploads/".$fnm3;
    move_uploaded_file($sourceone,$slider3);
    }
 else{
     $filepath=$_REQUEST["slider3"];
 }
   require'./coonection.php';
  $query="update  slider set slider3='$slider3' where id='$id'";
    mysqli_query($con, $query);
   $n=mysqli_affected_rows($con);
   
   if ($n>0){
       header('location:adminhome.php');
   }
 else {
       echo "<script>alert('try again')</script>";
   }
}

?>
<form method="post" enctype="multipart/form-data">
    <table align="center" border="1">
        <tr>
            <td><input type="file" name="slider4">
                <input type="checkbox" name="r4" checked hidden>
            <img src="<?php echo $c[4]; ?>" width="50px" height="50px"></td>
       </tr></td>
       <tr>
           <td colspan="2" align="center"><input type="submit" name="submit4"></input></td>
       </tr>
    </table>
</form>
<?php
if (isset($_REQUEST["submit4"])){
    extract($_REQUEST);
    if (isset($_REQUEST["r4"])){
    $fnm4=$_FILES["slider4"]["name"];
    $sourceone=$_FILES["slider4"]["tmp_name"];
    $slider4="uploads/".$fnm4;
    move_uploaded_file($sourceone,$slider4);
    }
 else{
     $filepath=$_REQUEST["slider4"];
 }
   require'./coonection.php';
  $query="update  slider set slider4='$slider4' where id='$id'";
    mysqli_query($con, $query);
   $n=mysqli_affected_rows($con);
   
   if ($n>0)
       header('location:adminhome.php');
}

?>

    <?php
require'./footer.php';
?>