<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="dist/css/bootstrap.css">
		<link rel="stylesheet" href="dist/css/style.css">
		<script src="js/jquery.min.js"></script>
		<script src="dist/js/bootstrap.js"></script>
		<script src="js/validation.js"></script>
</head>
<body>	
	
<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading text-center">Login </div>
						<br><br>
                        <?php  
                if(isset($_SESSION['msg']))  
                {  
					 echo $_SESSION['msg'];
					 unset($_SESSION['msg']);  
                }  
                ?>  
			<form action="action/userchecklogin.php" id="form1" method="POST"  >			
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-4">
										<label> Email Id </label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="emailid" id="emailid" class="form-control" required>
										<i style="color:red" id="emailerror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-4">
										<label> Password </label>
									</div>
									<div class="col-sm-8">
										<input type="password" name="password"  id="password" class="form-control" required>
										<i style="color:red" id="passworderror"></i>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group text-center">
                                        <button type="button" id="submitLogin" name="submitLogin" class="btn btn-primary" onclick="loginCheck()" > Login </button>
									</div>	
								</div>
								<hr>
							<div class="form-group text-center">	
								<a href="index.php"> Register Here </a>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
		</form>		
		</div>	
	</div>
</body>
</html>
