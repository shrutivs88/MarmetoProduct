<?php
session_start();
include 'action/dbConfig.php';
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
}
else{
	echo "Login Here";
}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="dist/css/bootstrap.css">
		<link rel="stylesheet" href="dist/css/style.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/validation.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="panel-heading text-center">Show Product </div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table align="center" border="1px" style="width:600px; line-height:40px;">
					<thead>
						
						<tr>
					  <th></th>			
				      <th>Product Name</th>
				      <th>Product Comapany</th>
			    		</tr>
					</thead>
					<tbody>
						<?php
						
						$sql4 = "SELECT pid, productname, productcompany from product where user_id='$user_id'";
						//$stmt = $conn->prepare($sql4);
						 $j =1;
						foreach ($conn->query($sql4) as $row) {

						echo '<tr>';
						echo '<th>';
  						echo '<td>'. $row['productname'] . '</td>'; 
  						echo '<td>'. $row['productcompany'] . '</td>'; 
  						echo '</th>';
  						echo '</tr>';  
						}

						?>

					</tbody>
						
				
					
				</table>
			</div>
			<div class="col-md-12">
			<a href="addProduct.php">Add Product</a><br>
			<a href="logout.php">Logout here </a>
			</div>

			<div class="col-md-2"></div>	
		</div>
	</div>		
</body>
</html>
