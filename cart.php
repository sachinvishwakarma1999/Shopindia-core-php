
<head>
        <title>Cart</title>
		
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
require'./sessionmanage.php'
?>
<?php
require './Coonection.php';
$email=$_SESSION["email"];
$query="SELECT * from cart where email='$email'";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);
?> 
  <?php
if($n>0){
    while ($p= mysqli_fetch_array($result)){
?>  
 <div class="col-sm-12 col-md-12" style="background-color: white">
 <div id="col" class="row" >
            <div class="col-sm-3 col-md-3 thumbnail" style="height: auto;border: none;align:center">
                <input type="email" name="email" value="<?php echo $p[0];?>" hidden>
                <input name="pid" value="<?php echo $p[1];?>"hidden>
                <img src="<?php echo $p[2];?>" style="height: 20%">
                 <input name="pimg" value="<?php echo $p[2];?>"hidden>
                 <input name="pname" value="<?php echo $p[3];?>"readonly style="border:none;width: 100%;text-align: center">
                  </div>
              
            
              <div class="col-sm-6 col-md-6" style="height: auto;font-family: serif">
                     <?php echo $p[4];?>
              </div>
               
              <div class="col-sm-3 col-md-3" style="height: auto;text-align: center">
                  <h1 style="font-family: serif">Price </h1>
                   <?php  echo $p[5];?>
                  
                  <a class="btn btn-block" href="buy.php?pid=<?php echo $p[1];?>"style="background-color: orangered;color: white">Buy</a>
                  <a class="btn btn-block" href="deletecart.php?email=<?php echo $p[0];?>"style="background-color: orange;color: white">Remove Cart</a>
              
              </div>
            
      <?php
    }   
}
 else {
    
     ?>
     <h1 style="text-align: center;font-family: serif;color: red">Your Cart Is Empty</h1>
     <h1 style="text-align: center;font-family: serif;color: red">order and get Benifits</h1>
 
 <?php
 }
?>            
    </div> 
</div>
        <?php
require './footer.php';
        ?>