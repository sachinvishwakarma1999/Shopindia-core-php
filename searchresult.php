
<?php
 require'./sessionmanage.php'
?>          <?php
if($n>0){
    while ($p= mysqli_fetch_array($result)){
        ?> 
        <div class="col-sm-12 col-md-12" style="background-color: white">
 <div id="col" class="row" >
            <div class="col-sm-3 col-md-3 thumbnail" style="height: auto;border: none;align:center">
             <img src="<?php echo $p[1];?>">
             <input style="border: none;text-align: center" value="<?php echo $p[2];?>"
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

?>
              
</div><hr>
</div>
     