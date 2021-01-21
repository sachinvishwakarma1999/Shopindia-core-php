<head>
        <title>All Product</title>
		
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
        <div class="col-sm-12 col-md-12" style="background-color: white">
            <div class="row">
        <?php
        require './adminheader.php';
        
        ?>
                <h1 style="font-family: serif;text-align: center;color: orangered">All Products</h1>
<?php
require './coonection.php';
$query="select * from product";
$result= mysqli_query($con, $query);
$n= mysqli_num_rows($result);

if($n>0){
        ?>
		<div class="table"  style="overflow-y: scroll;overflow-x: scroll">
  <table class="table-responsive" border="2" style="background-color: whitesmoke;border-color: black" align="center">
    <tr>
        <th>ID</th>
        <th>IMAGE<br>
        Name</th>
        <th>DETAIL</th>
        <th>QTY</th>
        <th>PRICE</th>
        <th>type</th>
         <th>Edit</th>
          <th>Delete</th>
    </tr>
    <?php
 while ($p= mysqli_fetch_array($result)){
   ?>
    <tr>
    <td><?php echo $p[0];?></td>
    <td><img style="height: 10%" src="<?php echo $p[1];?>"><br>
    <?php echo $p[2];?></td>
    <td><?php echo $p[3];?></td>
    <td><?php echo $p[4];?></td>
    <td><?php echo $p[5];?></td>
     <td><?php echo $p[6];?></td>
     <td><a href="productedit.php?pid=<?php echo $p[0];?>" style="text-decoration: none">Edit</a></td>
     <td><a href="productdelete.php?pid=<?php echo $p[0];?>">Delete</a></td>
    </tr>
 <?php
    }   
}
?>
</table>
</div>
</div>
  
</div>
  