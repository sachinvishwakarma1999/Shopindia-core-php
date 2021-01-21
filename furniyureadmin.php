
<head>
        <title>Furniture Admin</title>
		
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
 require'./adminheader.php'
?> 
<?php
require './coonection.php';
$query="SELECT * from product where type='furniture' ";
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
             <img src="<?php echo $p[1];?>"style="height: 20%">
             <input style="border: none;text-align: center;width: 100%" value="<?php echo $p[2];?>">
                  </div>
              
            
              <div class="col-sm-6 col-md-6" style="height: auto;font-family: serif">
                     <?php echo $p[3];?>
              </div>
               
              <div class="col-sm-2 col-md-2" style="height: auto;text-align: center">
                  <h1 style="font-family: serif">Price </h1>
                   <?php  echo $p[5];?>
                  <a class="btn btn-block" href="adminaddcart.php?pid=<?php echo $p[0];?>"style="background-color: orange;color: white">Add Cart</a>
                  
                  <a class="btn btn-block" href="adminbuy.php?pid=<?php echo $p[0];?>"style="background-color: orangered;color: white">Buy</a>
              </div>
            
              <div class="col-sm-1 col-md-1" style="height: auto;text-align: center;">
                  <h6 style="font-family: serif">Product Change</h6>
                  <a href="productedit.php?pid=<?php echo $p[0];?>" style="color:orangered">
                <span class="glyphicon glyphicon-pencil" style="color: red"></span> Edit</a><br>
                <a href="productdelete.php?pid=<?php echo $p[0];?>"style="color:orangered">
               <span class="glyphicon glyphicon-remove-circle" style="color: red"></span> Delete</a>
               
              </div>
      
      <?php
    }   
}
?>            
    </div> 
</div>
    <?php 
    require'./footer.php'
    ?>
</div>
<?php
if(isset($_REQUEST["cart"])){
    extract($_REQUEST);
    require './coonection.php';
    $query="insert into cart values('$email','$pimg','$pdetail','$price)";
    echo $query;
    die();
    mysqli_query($con,$query);
}
?>