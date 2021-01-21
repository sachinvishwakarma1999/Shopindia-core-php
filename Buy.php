
<head>
        <title>Buy</title>
		
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="mycss.css" rel="stylesheet" type="text/css"/>
        </head> 
		
<?php
 require'./sessionmanage.php'
?>         
<?php
        require './operatorheader.php';
        ?>
<?php
$pid=$_REQUEST["pid"];
require'./coonection.php';
$q="select * from product where pid='$pid'";
$result=mysqli_query($con,$q);
$c=mysqli_fetch_array($result);
?>

<?php
require './Coonection.php';
$email=$_SESSION["email"];
$s="select * from user where email='$email'";
$rs=mysqli_query($con, $s);
$a=  mysqli_fetch_array($rs);
?>
   
<form method="post" enctype="multipart/form-data">
    <div class="col-sm-12 col-md-12">
        <div class="row thumbnail">
            
            <div class="col-sm-4 col-md-4" style="text-align: center">
               <input type="text" name="pid" value="<?php echo $c[0]; ?>"hidden>
               <img src="<?php echo $c[1]; ?>"style="height: 20%">
            <input type="hidden" name="pimg"value="<?php echo $c[1]; ?>"><br>
            <input type="text" name="pname" readonly value="<?php echo $c[2]; ?>"style="border: none;text-align: center;width: 100%">
           </div>
            
             <div class="col-sm-4 col-md-4">
          
           <?php echo $c[3]; ?>
           <input type="text" name="pdetail" readonly value="<?php echo $c[3]; ?>"hidden>
             </div>
           
            <div class="col-sm-4 col-md-4" style="text-align: center">
                 <h2>Price</h2>
                 <input type="text" name="price" readonly value="<?php echo $c[5]; ?>"style="border: none"><br>
            
<img src="<?php echo $a[0]; ?>"  width="50px" height="50px"hidden>
 <input type="hidden" name="profile"value="<?php echo $a[0]; ?>"hidden>
 
                   <input type="text" name="firstname" value="<?php echo $a[1]; ?>"hidden>
               
                
               
                   <input type="text" name="lastname"value="<?php echo $a[2]; ?>"hidden>
               
               
                <input type="text" name="contact" value="<?php echo $a[4]; ?>"hidden>  
                <input type="text" name="email" readonly value="<?php echo $a[5]; ?>"hidden>
               
                <input type="text" name="adress" value="<?php echo $a[7]; ?>"hidden></td>
                <input type="text" name="areapin" value="<?php echo $a[8]; ?>"hidden></td>
                   <input type="text" name="date" value="<?php date_default_timezone_set('Asia/Kolkata');
                $currentTime = date( 'd-m-Y h:i:s A', time () );echo $currentTime;?>"hidden></td>
              
       
                <input class="btn btn-primary" type="submit" name="submit" value="Continue & Buy" style="background-color: orangered;color: white">
          </div>
        </div>
    </div>
</form>
<?php
if(isset($_REQUEST["submit"])){
    extract($_REQUEST);
require './Coonection.php';
$s="insert into buy values('$pid','$pimg','$pname','$pdetail','$price','$profile','$firstname','$lastname','$contact','$email','$adress','$areapin','$date')";
$rs=mysqli_query($con,$s);
if($rs>0){
    header('location:yourorders.php');
   }
 else{
    echo "try after some";
 }
}
?>