<?php
session_start();
if(isset($_SESSION['user'])){
    header("location: index.php");
    }
include "dbConfig.php";


    $fname = $_POST['fullname'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
    
    if(isset($fname) && isset($email) && isset($password)){
    
        $sql = "insert into register(fullname, email, password) values('$fname', '$email', '$password')";
          $query = $conn->prepare($sql);
            $query->execute();
      
          if($query == true) {
            $_SESSION['msg'] = '<label><center>Registered Successfully ! Login here</center></label>'; 
              header("location: ../login.php");
          } else {
             
              $_SESSION['msg'] = '<label>Username/Password is wrong</label>'; 
              header("location: ../index.php");
          }
      }
      
    

    



?>