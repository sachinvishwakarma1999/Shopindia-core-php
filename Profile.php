
<head>
        <title>Profile</title>
		
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
        require './Coonection.php';
        $email=$_SESSION["email"];
$s="select * from user where email='$email'";
$rs=mysqli_query($con, $s);
$a=  mysqli_fetch_array($rs);
?>
   <form method="post" enctype="multipart/form-data">
                <table id="registrations" align="center" style="font-size:large">
                
  <tr>
           <td>Profile</td>
           <td>        
                <input type="file"  name="profile"/>
                <img src="<?php echo $a[0]; ?>"  width="50px" height="50px">
                <input type="hidden" name="profile"value="<?php echo $a[0]; ?>">
               <input type="checkbox" value="r1" name="r1" >
           </td> 
  </tr>
                
                
                <tr>
                    <td>firstname</td>
                    <td><input type="text" name="firstname" value="<?php echo $a[1]; ?>"></td>
                </tr>
                
               <tr>
                   <td>lastname</td>
                   <td><input type="text" name="lastname"value="<?php echo $a[2]; ?>"></td>
               </tr>
               
                <tr>
                     <td>dob</td>
                     <td><input type="date" name="dob" value="<?php echo $a[3]; ?>"></td>
                </tr>
                
                <tr>
                     <td>contact</td>
                    <td><input type="text" name="contact" value="<?php echo $a[4]; ?>"></td>
                </tr>
                
               <tr>
                    <td>email</td>
                    <td><input type="text" name="email" readonly value="<?php echo $a[5]; ?>"></td>
               </tr>
               
                <tr>
                     <td>password</td>
                    <td><input type="text" name="password" value="<?php echo $a[6]; ?>"></td>
                </tr>
                <tr>
                     <td>adress</td>
                    <td><input type="text" name="adress" value="<?php echo $a[7]; ?>"></td>
                </tr>
                <tr>
                     <td>area pin</td>
                    <td><input type="text" name="areapin" value="<?php echo $a[8]; ?>"></td>
                </tr>
                
                
                <tr>
                    <td colspan="2"><input class="btn btn-primary btn-block" type="submit"  name="update" value="Update"></td>
                </tr>
<html>
  <?php  
if(isset($_REQUEST["update"])){
    extract($_REQUEST);
        if(isset($_REQUEST["r1"]))
    {
      $fnm1=$_FILES["profile"]["name"];
      $tmp=$_FILES["profile"]["tmp_name"];
      $profile="uploads/$fnm1";
      move_uploaded_file($tmp,$profile);
    }
    else
    {
        $profile=$_REQUEST["profile"];
    }
         require'./coonection.php';
    $query="update user set profile='$profile',firstname='$firstname',lastname='$lastname',dob='$dob',"
            . "contact='$contact',password='$password',adress='$adress',areapin='$areapin',role='admin' where email='$email'";
    $s=mysqli_query($con, $query);
   $n= mysqli_affected_rows($con);
    if($n>0){
		   
   
       echo "<script>alert('successfully update');</script>";
	
    }
 else {
    echo "<script>alert('another way');</script>";
   }
         

}
?>