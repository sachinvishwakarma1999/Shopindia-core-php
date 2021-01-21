<?php
ob_start();
?>
<html>
    <head>
        <title>Login</title>
		
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
    <div class="col-sm-12 col-md-12" style="background-color: white;color: black;">
          <div id="col" class="row" >
            
            
            
              <div class="col-sm-5 col-md-5" style="background-color: blue;height: 45%;color: white;font-family: cursive">
                 <h1>Login</h1>
                 <h2>Login with your<br>
                 username and password<br>
                 You have access to all our <br>
                 online products with the same<br>
                 username and password<br></h2>
                 </div>
               
              <div class="col-sm-7 col-md-7" style="background-color: #eef2dc;height: 45%;">
                 <form method="post">
                <table id="Login" align="center" style="font-size: x-large">
                 <tr><td><input type="text" name="email" placeholder="enter your email"></td></tr>
                 <tr><td><input type="password" name="password" placeholder="enter your password"></td></tr>
                <tr><td><input class="btn btn-success btn-block" type="submit"  name="login" value="Login"></td></tr>
                <tr><td><h1 align="center" style="color:red">or</h1></td></tr>
                <tr><td><a href="registrationform.php" class="btn btn-primary btn-block">Create Account</a></td></tr>
                <tr><td><a href="registrationform.php" style="text-decoration: none;color: blue"><h4>Forgot account ? create Account</h4></a></td></tr>
                </tr>
                </table>
            </form>
            </div>
           
</div><hr>
</div>
    
     

                      <?php
if(isset($_REQUEST["login"])){
    extract($_REQUEST);
   require'./coonection.php';
   $query = "select role from user where email='$email' and password='$password'";
   $result=mysqli_query($con, $query);
   $n=mysqli_num_rows($result);
	
if($n>0){
   $a=mysqli_fetch_array($result);
    $role=$a[0];
    session_start();
    $_SESSION["email"]=$email;
    $_SESSION["role"]=$role;
    $_SESSION["password"]=$password;
    
    if($role=="admin")
    header('location:adminhome.php');
    elseif($role=="operator")
         header('location:operator.php');
     else 
           header('location:index.php');
}
else {
    echo "<script>alert('emailid and password incorrect');</script>";
}
  }
?>
<?php
require'./footer.php';
?>