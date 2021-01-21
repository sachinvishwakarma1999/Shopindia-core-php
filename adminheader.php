      <head>
        <title>Admin Header</title>
		
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="mycss.css" rel="stylesheet" type="text/css"/>
        </head> 
        
        <nav class="navbar navbar-default"style="color: white;background-color: #0377fc">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"style="color: white;background-color: #0377fc">Shopindia</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a class="glyphicon glyphicon-home" href="adminhome.php"style="color: white;background-color: #0377fc"> Home <span class="sr-only">(current)</span></a></li>
      </ul>
        
        
      
        <form class="navbar-form navbar-left" action="adminserchbar.php">
        <div class="form-group">
            <input type="text" name="pname" class="form-control" placeholder="Search">
        </div>
          <button type="submit" name="search" class="btn btn-default">Submit</button>
      </form>
        
        
      <ul class="nav navbar-nav navbar-right"> 
          <li><a href="productadd.php"style="color: white;background-color: #0377fc">AddProduct</a></li>
          <li><a class="glyphicon glyphicon-import" href="productshow.php"style="color: white;background-color: #0377fc">AllProduct</a></li>
          <li><a href="buyproductlist.php"style="color: white;background-color: #0377fc">Orderlist</a></li>
        <li><a class="glyphicon glyphicon-user" href="Profile.php"style="color: white;background-color: #0377fc">Profile</a></li>
        <li><li><a class="glyphicon glyphicon-user" href="logout.php"style="color: white;background-color: #0377fc">Logout</a></li> </li>
       
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <div id="navbar2" style="margin-top:1%;">
        <ul style="padding:1%">
            <li><a href="electronicsadmin.php">Electronics</a></li>
            <li><a href="menadmin.php">Men</a></li>
            <li><a href="womenadmin.php">Women</a></li>
            <li><a href="furniyureadmin.php">Furniture</a></li> 
        </ul>  
    </div>
