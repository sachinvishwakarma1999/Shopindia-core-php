<?php
ob_start();
?>
<head>
        <title>Product Edit</title>
		
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
 require'./sessionmanage.php'
?>         
            <?php
            require'./adminheader.php';
            ?>
            
        <div class="col-sm-12 col-md-12" style="background-color: white">
 <div id="col" class="row" >
<?php
$pid=$_REQUEST["pid"];
require'./coonection.php';
$query="select * from product where pid='$pid'";
$result=mysqli_query($con,$query);
$n= mysqli_fetch_array($result);
?>
     <form method="post" enctype="multipart/form-data" style="padding: 1%">
    <table border="10" style="font-size: large;border-color: windowframe;width: 100%;">
    <tr>
        <td>Id</td>
        <td><input type="text" name="pid" readonly value="<?php echo $n[0];?>"style="border: none"></td>           
    </tr>
    <tr>
        <td>pimg</td>
         <td>
<input type="file"  name="pimg" />
 <img src="<?php echo $n[1]; ?>"  width="50px" height="50px">
 <input type="hidden" name="pimg"value="<?php echo $n[1]; ?>">
 <input type="checkbox" value="r1" name="r1"></td>
       </tr>
       <tr>
        <td>pname</td>
        <td><input type="text" name="Pname"  value="<?php echo $n[2];?>"style="border: none"></td>           
    </tr>
       <tr>
        <td>Detail</td>
       <td> 
           <input type="text" name="pdetail"  value="<?php echo $n[3];?>"style="border: none;"></td>           
    </tr>
    <tr>
        <td>QTY</td>
        <td><input type="text" name="qty" value="<?php echo $n[4];?>"style="border: none"></td>           
    </tr>
     <tr>
        <td>Price</td>
        <td><input type="text" name="price" value="<?php echo $n[5];?>"style="border: none"></td>           
    </tr>
    <tr style="border:none">
        <td>type</td>
        <td><input type="text" name="type" value="<?php echo $n[6];?>"style="border: none"></td>           
    </tr>
    
    <tr>
        <td colspan="2"><input class="btn-success " type="submit" name="product" value="submit"</td>           
    </tr>
</form>
</table>
    <?php
if (isset($_REQUEST["product"])){
 extract($_REQUEST);
    if (isset($_REQUEST["r1"])){
    $pimg=$_FILES["pimg"]["name"];
    $sourceone=$_FILES["pimg"]["tmp_name"];
    $pimg="uploads/".$pimg;
    move_uploaded_file($sourceone,$pimg);
    }
 else{
     $pimg=$_REQUEST["pimg"];
 }
   require'./coonection.php';
  $query="update  product set pimg='$pimg',Pname='$Pname',pdetail='$pdetail',qty='$qty',price='$price',type='$type' where pid='$pid'";

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
 </div></div>
    
<div>
<?php
require'./footer.php';
?></div>