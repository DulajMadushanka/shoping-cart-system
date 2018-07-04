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

            </ul>
        </div>      
      </div>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8" id="cart_msg">
            <!--Cart Massage-->
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="panel panel-primary">
              <div class="panel-heading">Cart Checkout</div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-2"><b>Action</b></div>
                  <div class="col-md-2"><b>Product Image</b></div>
                  <div class="col-md-2"><b>Product Name</b></div>
                  <div class="col-md-2"><b>Quantity</b></div>
                  <div class="col-md-2"><b>Product Price</b></div>
                  <div class="col-md-2"><b>Price in $</b></div>
                </div>
                <div id="cart_checkout"></div>
                <!--<div class="row">
                  <div class="col-md-2">
                    <div class="btn-group">
                      <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                      <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
                    </div>
                  </div>
                  <div class="col-md-2"><img src="images/ipad.jpg"></div>
                  <div class="col-md-2">Product Name</div>
                  <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled name=""></div>
                  <div class="col-md-2"><input type="text" class="form-control" value="1" disabled name=""></div>
                  <div class="col-md-2"><input type="text" class="form-control" value="5000" disabled name=""></div>
                </div>-->
               <!-- <div class="row">
                      <div class="col-md-8"></div>
                      <div class="col-md-4">
                        <b>Total $50000</b>
                      </div>
                    </div>-->
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>




    </body>
</html>        