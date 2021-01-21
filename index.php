<html>
    <head>
        <title>Home</title>
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
    require'./visitorheader.php';
    ?>
    <?php
    require'./slider.php'
    ?>
    
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
                   <a href="visitorelectronics.php" class="btn btn-primary btn btn-block">Get Information</a>
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
                <a href="visitormen.php" class="btn btn-primary btn btn-block">Get Information</a>
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
                <a href="visitorwomen.php" class="btn btn-primary btn btn-block">Get Information</a>
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
                <a href="visitorfurniture.php" class="btn btn-primary btn btn-block">Get Information</a>
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

    <?php
  require'./footer.php';
  ?>
</html>

</body>

