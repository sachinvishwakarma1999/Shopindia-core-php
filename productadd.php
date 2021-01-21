<html>
    <head>
        <title>Product Add</title>
		
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="mycss.css" rel="stylesheet" type="text/css"/>
    </head>
</html>
<body>

<?php
 require'./sessionmanage.php'
?>         
    <?php
     require'./adminheader.php'
 ?>    
    <div class="col-sm-12 col-md-12" style="background-color: whitesmoke;color: black;">
        <div class="row">
            
            
              <div class="col-sm-5 col-md-5" style="background-color:blue;color: white;height: 60%;font-family: serif">
                  <h1>Add<br>Products</h1>  
                   </div>
               
              <div class="col-sm-7 col-md-7" style="height: 60%;background-color: #f2ffab;">
                 <form method="post" enctype="multipart/form-data">
                <table id="registrations" align="center">
                    <tr><td><input type="number" name="pid" hidden ></td></tr>
                <tr><td><input type="file" name="pimg"></td></tr>
                <tr><td><input type="text" name="pname" placeholder="enter product name...." required></td></tr>
                <tr><td><textarea type="text" name="pdetail" placeholder="enter product detail name"required></textarea></td></tr>
                <tr><td><input type="number" name="qty" placeholder="enter qty" ></td></tr>
                <tr><td><input type="number" name="price" placeholder="enter price"required></td></tr>
                <tr>
                    <td>
                        <select  name="type">
                             <option>...Select..</option>
                            <option>electronics</option>
                             <option>menwear</option>
                              <option>womenwear</option>
                               <option>furniture</option>
                        </select>
                    </td>
                </tr>
                <tr><td><input class="btn btn-success btn-block" type="submit"  name="Sign" value="Add"></td></tr>
                </tr>
                </table>
            </form>
            </div>
       
<hr>     
</div><hr>
</div>
   
    
      <?php
if(isset($_REQUEST["Sign"])){
    extract($_REQUEST);
     require'./coonection.php';
    $a=$_FILES["pimg"]["name"];
    $source=$_FILES["pimg"]["tmp_name"];
    $pimg="uploads/".$a;
    move_uploaded_file($source, $pimg);
    
    $query="insert into product values('$pid','$pimg','$pname','$pdetail','$qty','$price','$type')";
    
    $s=mysqli_query($con, $query);
   $n= mysqli_affected_rows($con);
    if($n>0){
		   
   
       echo "<script>alert('successfully Register');</script>";
	
    }
 else {
    echo "<script>alert('another way');</script>";
   }
}
?>

    <?php
require'./footer.php';
?>