    <head>
        <title>Your Orders</title>
		
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="mycss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: white">
<?php
require'./sessionmanage.php'
?>
        <?php
        require './operatorheader.php';
        ?>
        <h1 style="font-family: fantasy;text-align: center;color: orangered">Your Orders</h1>
<?php
require './Coonection.php';
$email=$_SESSION["email"];
$query="SELECT * from buy where email='$email'";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);
?> 
    
<?php
if($n>0){
    while ($a= mysqli_fetch_array($result)){
?>  
        <div class="col-sm-12 col-md-12" style="padding: 2%;" >
            <div class="row ">
<form method="post" enctype="multipart/form-data">
    <div class="col-sm-3 col-md-3" style="text-align: center">
        <input type="text" name="pid" value="<?php echo $a[0]; ?>"hidden>
        <img src="<?php echo $a[1]; ?>" style="height: 20%">
            <input type="hidden" name="pimg"value="<?php echo $a[1]; ?>"><br>
             <?php echo $a[2]; ?>
           </div>
               
    <div class="col-sm-3 col-md-3" style="font-family: serif">
            <?php echo $a[3]; ?>
        </div>
               
               
    <div class="col-sm-3 col-md-3" style="text-align: center;font-family: serif">
            Price
           <?php echo $a[4]; ?>
          </div>
    
    <div class="col-sm-3 col-md-3" style="text-align: center;font-family: serif">
            Your Order Is Recieved<br>
            Order Time<br>
           <?php echo $a[12]; ?>
          </div>
    <?php
}

    }
    ?>
    
</form>
             
        </div><hr>
        </div>
    </body>