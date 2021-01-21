
 <?php
            require'./coonection.php'; 
            $p="select* from slider";
            $result=mysqli_query($con,$p);
            $n= mysqli_num_rows($result);
            if($n>0){
            while ($a= mysqli_fetch_array($result)){
                ?>
            <div id="slider">
            <figure>
                <?php $a[0]; ?>
               <img src="<?php echo $a[1]; ?>">
               <img src="<?php echo $a[2]; ?>">
               <img src="<?php echo $a[3]; ?>">
               <img src="<?php echo $a[4]; ?>">
            </figure>
               <?php
              }
              }       
   else
       {
       echo "<script>alert'record not found'</script>";
       }
       ?></div>
