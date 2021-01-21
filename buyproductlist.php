

    <head>
        <title>User Order List</title>
		
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
    require'./adminheader.php';
    ?>
    <h1 style="font-family: serif;text-align: center;color: red">User Order List</h1>
    <div class="col-sm-12 col-md-12">
      <?php
require './coonection.php';
$query="SELECT * from buy ";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);
?>
       
<form method="post" enctype="multipart/form-data">
    
<?php
if($n>0){
    while ($a= mysqli_fetch_array($result)){
        ?> 
    <div class="col-sm-12 col-md-12 "style="background-color: white">
            <div class="row " >
                 <div class="col-sm-1 col-md-1">
             <?php echo $a[0]; ?><br>
            <img src="<?php echo $a[1]; ?>" style="height: 10%">
            <input type="hidden" value="<?php echo $a[1]; ?>"><br>
           <?php echo $a[2]; ?>
                 </div>
            
         <div class="col-sm-4 col-md-4">
        <?php echo $a[3]; ?>
         <?php echo "Price=".$a[4]; ?><br>
         </div>
      
                    
                  <div class="col-sm-6 col-md-6">    
              <img src="<?php echo $a[5]; ?>"  width="50px" height="50px">
              <input type="hidden" name="profile"value="<?php echo $a[5]; ?>"readonly style="border: none">
               <?php echo $a[6]; ?>
               <?php echo $a[7]; ?><br>
                    
                    
                    <?php echo $a[8]; ?><br>
                
                   
                    <?php echo $a[9]; ?><br>
               
                   
                    <?php echo $a[10]; ?><br>
                
                    
                    <?php echo $a[11]; ?><br>
                   <?php echo "Product Order time = ". $a[12]; ?><br>
                   
                  </div>
                
    <?php
}
}
    
    ?>
    
               </div></div></form>
     <?php
    require'./footer.php';
    ?>