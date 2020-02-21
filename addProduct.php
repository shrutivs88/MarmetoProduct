<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="dist/css/bootstrap.css">
        <link rel="stylesheet" href="dist/css/style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/validation.js"></script>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <?php 
              
                    if(isset($_SESSION["user_id"]))  
                {  
                    echo '<h3>Login Success, Welcome -</h3>';
                    echo $_SESSION['fullname'];  
                    echo '<br /><br />';
                  //  echo '<br /><br /><a href="logout.php">Logout</a>'; 
                } else{
                    $_SESSION['msg'] = "<p class='alert alert-warning'> Please Login ....</p>";
                   header("Location:login.php");
                }
                ?>
                <div class="col-md-8">
                  
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">Add Product </div>
                        <br><br>
                            <?php 
                             
                             if(isset($_SESSION['msg']))  
                             {  
                                  echo $_SESSION['msg'];
                                  unset($_SESSION['msg']);  
                             }  
                             
                            ?>
            <form action="action/saveProduct.php" id="form1" method="POST"  >          
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Product Name</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="pname" id="pname" class="form-control" required>
                                        <i style="color:red" id="perror"></i>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Product Company</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="pcmpny" id="pcmpny" class="form-control" required>
                                        <i style="color:red" id="pcmpny"></i>
                                    </div>
                                </div>
                                <br>
                                    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                                <div class="row">
                                    <div class="form-group text-center">
                                        <button type="button" id="psubmit"  name="psubmit" class="btn btn-info" onclick="saveProduct()" > Save Product</button>
                                    </div>  
                                </div>
                                <hr>
                            <div class="form-group text-center">    
                                <a href="showproduct.php"> Show Product Here </a>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
        </form>     
        </div>  
    
                </div>
                <div class="col-md-2"></div>
            </div>    
        </div>
</body>
</html>