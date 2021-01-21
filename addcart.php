
<?php
 require'./sessionmanage.php'
?>         
<head>
        <title>Add Cart</title>
		
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="mycss.css" rel="stylesheet" type="text/css"/>
        </head> 
    <?php
        require './operatorheader.php';
        ?>
        <?php
$pid=$_REQUEST["pid"];
require'./coonection.php';
$q="select * from product where pid='$pid'";
$result=mysqli_query($con,$q);
$n= mysqli_num_rows($result);
?>    
<?php
require './Coonection.php';
$email=$_SESSION["email"];
$s="select * from user where email='$email'";
$rs=mysqli_query($con, $s);
$a=  mysqli_fetch_array($rs);
?>

    <?php
if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 
        <div class="col-sm-12 col-md-12" style="background-color: white">
 <div id="col" class="row" >
     <form method="post" enctype="multipart/form-data">
        
            <div class="col-sm-3 col-md-3 thumbnail" style="height: auto;border: none;align:center">
                <input type="email" name="email" value="<?php  echo $a[5];?>" hidden>
                <input type="text" name="pid" value="<?php  echo $p[0];?>" hidden>
                <img src="<?php echo $p[1];?>"style="height: 20%">
             <input type="text" name="pimg" value="<?php  echo $p[1];?>" hidden>
             <input style="border: none;text-align: center;width: 100%" name="pname" value="<?php echo $p[2];?>">
                  </div>
            
              <div class="col-sm-6 col-md-6" style="height: auto;font-family: serif">
                     <?php echo $p[3];?>
                  <input type="text" name="pdetail" value="<?php  echo $p[3];?>" hidden>
              </div>
               
              <div class="col-sm-3 col-md-3" style="height: auto;text-align: center">
                  <h1 style="font-family: serif">Price </h1>
                   <?php  echo $p[5];?>
                <input type="text" name="price" value="<?php  echo $p[5];?>" hidden>
                <input type="submit" class="btn btn-primary btn-block" name="cart" value="Add Cart" style="background-color: orange;color: white"> 
                <a class="btn btn-block" href="buy.php?pid=<?php echo $p[0];?>"style="background-color: orangered;color: white">Buy</a>
                 </div>
            
      
      <?php
    }   
}
?>     </form>             
  
    </div> 
</div>
<?php
if(isset($_REQUEST["cart"])){
    extract($_REQUEST);
    require './coonection.php';
    $query="insert into cart values('$email','$pid','$pimg','$pname','$pdetail','$price')";
 $n= mysqli_query($con,$query);
 if($n>0)
     header ('location:cart.php');
 else 
     echo 'not add';
}
?>
