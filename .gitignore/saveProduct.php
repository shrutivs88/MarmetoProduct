<?php
session_start();
if(isset($_SESSION['user'])){
    header("location: index.php");
    }
include "dbConfig.php";

  $productName = $_POST['pname'];
  $productCompany = $_POST['pcmpny'];
  $user_id = $_POST['user_id'];

  if(isset($productName) && isset($productCompany)) 
  {
  	$sql3 = "INSERT into product(productname, productcompany, user_id) 
 	 values('$productName', '$productCompany', '$user_id')"; 
 	  $query = $conn->prepare($sql3);
      $query->execute();

       if($query == true) {

            $_SESSION['msg'] = '<label><center>Product Saved Successfully !</center></label>'; 
              header("location: ../showProduct.php");
          } else {
             
              $_SESSION['msg'] = '<label>Product not added</label>'; 
              header("location: ../login.php");
          }

	}




?>