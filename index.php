<?php
    session_start();
    if (isset($_SESSION["uid"])) {
        header("location:profile.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dulaj Store</title>
             <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

       <script type="text/javascript" src="js/jquery2.js"></script>

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="main.js"></script>


    </head>
    
    <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                 <a class="navbar-brand" href="#">Dulaj Shop</a>
            </div>     
            <ul class="nav navbar-nav">
              <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home </a></li>
              <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li> 
              <li style="width: 300px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search" name=""></li>
              <li style="top:10px;left:20px"><button class="btn btn-primary" id="search-btn">Search</button></li>
          </ul>

            <ul class="nav navbar-nav navbar-right">
             

              <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                <ul class="dropdown-menu">
                    <div style="width: 300px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Login</div>
                            <div class="panel-heading">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="" required/>
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="" required/>
                                <p><br/></p>
                                <a href="#" style="color: white; list-style: none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login">
                            </div>
                                <div class="panel-footer" id="e_msg"></div>
                                
                                   
                        </div>
                        
                    </div>
                   
                </ul>
               </li> 

              <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>  
            </ul>
           
        </div>
      </div>
          
        </div>

        <p><br></p>
        <p><br></p>
        <p><br></p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div id="get_category"></div>
                   <!-- <div class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><h4>Categories</h4></a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                    </div>-->
                     <div id="get_brand"></div>
                   <!-- <div class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><h4>Brand</h4></h4></a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Categories</a></li>
                    </div>-->
                </div>   
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">Products</div>
                    <div class="panel-body">
                        <div id="get_product"></div>
                        <!--<div class="col-md-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">Samsung Galaxy</div>  
                                <div class="panel-body">
                                    <img src="images/samsung.jpg" />
                                </div>  
                                <div class="panel-heading">$.500.00
                                <button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button>
                                </div>
                            </div>
                            
                        </div>-->
                        

                    </div>
                    <div class="panel-footer">&copy; 2018</div>


                </div>
            <div class="col-md-1"></div>
            </div>
        </div>

       

    
    
    </body>

</html>