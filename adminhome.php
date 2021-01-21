
<?php
 require'./sessionmanage.php'
?>         
<head>
        <title>Admin Home</title>
		
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
      <div>
            <?php
            require'./coonection.php'; 
            $p="select* from slider";
            $result=mysqli_query($con,$p);
            $n= mysqli_num_rows($result);
            if($n>0){
            while ($a= mysqli_fetch_array($result)){
                ?>
            <div id="slider">
            <figure>
                <?php $a[0]; ?>
               <img src="<?php echo $a[1]; ?>">
               <img src="<?php echo $a[2]; ?>">
               <img src="<?php echo $a[3]; ?>">
               <img src="<?php echo $a[4]; ?>">
            </figure>
            <div align="center" style="font-size:20px;text-decoration: none; background-color: whitesmoke;">
                <a href="changesliderimage.php?id=<?php echo $a[0];?>" style="color:orangered">
                    <span class="glyphicon glyphicon-pencil" style="color: red"></span> Change Slider Image</a>
               <?php
              }
              }       
   else
       {
       echo "<script>alert'record not found'</script>";
       }
            ?>
       </div></div>

          
<?php
require './coonection.php';
$query="SELECT * from homemenu where id='1'";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);

if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 

            <div style="background-color: white;text-align: center;margin-top: 1%;height: auto">
        <div class="col-sm-12 col-md-12" >
        <div class="row thumbnail" >
            
            <div class="col-sm-3 col-md-3 ">
                    <img src="<?php echo $p[1];?>" style="height: 20%;width: 100%"><hr>
                   <input name="typename" value="<?php echo $p[2];?>"style="border:none" readonly>
                   <a href="electronicsadmin.php" class="btn btn-primary btn btn-block">Get Information</a>
            </div>
            
            <?php
require './coonection.php';
$query="SELECT * from homemenu where id='2'";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);

if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 
                <div class="col-sm-3 col-md-3 ">
                  <img src="<?php echo $p[1];?>"style="height: 20%;width: 100%"><hr>
                <input name="typename" value="<?php echo $p[2];?>"style="border:none" readonly>
                <a href="menadmin.php" class="btn btn-primary btn btn-block">Get Information</a>
            </div>
              <?php
require './coonection.php';
$query="SELECT * from homemenu where id='3'";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);

if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 
                <div class="col-sm-3 col-md-3 ">
                <img src="<?php echo $p[1];?>"style="height: 20%;width: 100%"><hr>
                <input name="typename" value="<?php echo $p[2];?>"style="border:none" readonly>
                <a href="womenadmin.php" class="btn btn-primary btn btn-block">Get Information</a>
            </div>
            <?php
require './coonection.php';
$query="SELECT * from homemenu where id='4'";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);

if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 
                <div class="col-sm-3 col-md-3 ">
                <img src="<?php echo $p[1];?>"style="height: 20%;width: 100%"><hr>
                <input name="typename" value="<?php echo $p[2];?>"style="border:none" readonly>
                <a href="furniyureadmin.php" class="btn btn-primary btn btn-block">Get Information</a>
            </div>
            
        </div>
    </div></div>
     <?php
    }   
}}
}}
}}
    }
?>
          
<div>
<?php
require'./footer.php';
?></div>