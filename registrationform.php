<html>
    <head>
        <title>Registration</title>
		
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
     require'./visitorheader.php'
 ?>    
    <div class="col-sm-12 col-md-12" style="background-color: whitesmoke;color: black;">
        <div class="row">
              <div class="col-sm-5 col-md-5" style="background-color:blue;color: white;height: 60%;font-family: cursive">
                <h2>Registration with your<br>
                 username and password<br>
                 You have access to all our <br>
                 online products with the same<br>
                 username and password<br></h2>
                    </div>
               
              <div class="col-sm-7 col-md-7" style="height: 60%;background-color: #eef2dc;">
                 <form method="post" enctype="multipart/form-data">
                <table id="registrations" align="center">
                <tr><td><input type="file" name="profile"></td></tr>
                <tr><td><input type="text" name="firstname" placeholder="enter first name...." required></td></tr>
                <tr><td><input type="text" name="lastname" placeholder="enter last name"required></td></tr>
                <tr><td><input type="date" name="dob" ></td></tr>
                <tr><td><input type="text" name="contact" placeholder="enter contact no"required></td></tr>
                <tr><td><input type="text" name="email" placeholder="enter email"required></td></tr>
                <tr><td><input type="text" name="password" placeholder="enter password"required></td></tr>
                <tr><td><input type="text" name="adress" placeholder="enter adress"required></td></tr>
                <tr><td><input type="number" name="areapin" placeholder="enter pin"required></td></tr>
                <tr><td><input class="btn btn-success btn-block" type="submit"  name="Sign" value="Signup"></td></tr>
                <tr><td><a href="login.php" class="btn btn-primary btn-block">I Have account</a></td></tr>
               
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
    $a=$_FILES["profile"]["name"];
    $source=$_FILES["profile"]["tmp_name"];
    $profile="uploads/".$a;
    move_uploaded_file($source, $profile);
    
    
    $query="insert into user values('$profile','$firstname','$lastname','$dob','$contact','$email','$password','$adress',$areapin,'operator')";
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