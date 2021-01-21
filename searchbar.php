 <head>
        <title>Search Bar</title>
		
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
 require'./operatorheader.php'
?> 
<?php
if(isset($_REQUEST["search"])){
    extract($_REQUEST);
require'./coonection.php';
$query="select * from product where pname='$pname'";
$result=mysqli_query($con, $query); 
$n= mysqli_num_rows($result);
?>
<?php
if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 
        <div class="col-sm-12 col-md-12" style="background-color: white">
 <div id="col" class="row" >
            <div class="col-sm-3 col-md-3 thumbnail" style="height: auto;border: none;align:center">
                <img src="<?php echo $p[1];?>" style="height: 20%">
             <input style="border: none;text-align: center;width: 100%" value="<?php echo $p[2];?>"
                  </div>
              </div>
            
              <div class="col-sm-6 col-md-6" style="height: auto;font-family: serif">
                     <?php echo $p[3];?>
              </div>
               
              <div class="col-sm-3 col-md-3" style="height: auto;text-align: center">
                  <h1 style="font-family: serif">Price </h1>
                   <?php echo $p[5];?>
                  <a class="btn btn-block" href="buy.php?pid=<?php echo $p[0];?>"style="background-color: orangered;color: white">Buy</a>
                    <input type="submit" class="btn btn-block" value="Cart" style="background-color: orange;color: white">
              </div> 
                  <?php
    }
}
else {
?>
        <h1 style="text-align: center;font-family: serif;color: blue">No Result Found</h1>
        <?php
}
}
 
?>
              
</div><hr>
</div>
