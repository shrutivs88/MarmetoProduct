<?php
session_start();
include "dbConfig.php";

	$emailid = trim($_POST['emailid']);
	$password = trim($_POST['password']);
	if($emailid != "" && $password != "") {
		//try {
			$query = "SELECT user_id, fullname, email from register where email =:emailid and password=:password";
			$stmt = $conn->prepare($query);
			$stmt->bindParam(':emailid', $emailid, PDO::PARAM_STR);
			$stmt->bindValue(':password', $password, PDO::PARAM_STR);
			$stmt->execute();
			$count = $stmt->rowCount();
			 $row   = $stmt->fetch(PDO::FETCH_ASSOC);
			 if($count == 1) {

			// 	/******************** Your code ***********************/
				$_SESSION['user_id']   = $row['user_id'];
				$_SESSION['fullname'] = $row['fullname'];
				$_SESSION['email'] = $row['email'];
			 	header('location:../addProduct.php');
			  } 
			  else {
                    $_SESSION['msg'] = "Invalid email id and password!";
                   	header('location:../login.php');
			 }
	//	} catch (PDOException $e) {
		//	echo "Error : ".$e->getMessage();
	//	}
	} else {
		$_SESSION['msg'] = "Both fields are required!";
	}



?>