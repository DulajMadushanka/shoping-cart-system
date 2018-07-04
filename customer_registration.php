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
      			<div class="col-md-8" id="signup_msg">
      				<!--Alert from signup form-->					
      			</div>	
      			<div class="col-md-2"></div>				
      		</div>
      		<div class="row">
      			<div class="col-md-2"></div>
      			<div class="col-md-8">
      				<div class="panel panel-primary">
      					<div class="panel-heading">Customer SignUp Form</div>
      					<div class="panel-body">
      						
      					<form method="post">	
      						<div class="row">
      							<div class="col-md-6">
      								<label for="f_name">First Name</label>
      								<input type="text" id="f_name" name="f_name" class="form-control">
      							</div>
      							<div class="col-md-6">
      								<label for="l_name">Last Name</label>
      								<input type="text" id="l_name" name="l_name" class="form-control">
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<label for="email">Email</label>
      								<input type="email" id="email" name="email" class="form-control">
      								
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<label for="mobile">Mobile</label>
      								<input type="text" id="mobile" name="mobile" class="form-control">
      								
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<label for="password">Password</label>
      								<input type="password" id="password" name="password" class="form-control">
      								
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<label for="repassword">Re-Enter Password</label>
      								<input type="password" id="repassword" name="repassword" class="form-control">
      								
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<label for="address1">Address Line 1</label>
      								<input type="text" id="address1" name="address1" class="form-control">
      								
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<label for="repassword">Address Line 2</label>
      								<input type="text" id="address2" name="address2" class="form-control">
      								
      							</div>
      							
      						</div>
      						<div class="row">
      							<div class="col-md-12">
      								<input style="float: right;" type="button" id="signup_button" name="signup_button" value="Sign Up" class="btn btn-success btn-lg">
      								
      							</div>
      							
      						</div>

      						
      						
      						</form>
      					</div>

      					<div class="panel-footer"></div>

      				</div>

      			</div>
      			<div class="col-md-2"></div>

      		</div>
      	

      </div>
</body>
</html>