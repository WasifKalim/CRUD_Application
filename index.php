<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login 2</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/style1.css">

</head>
<body style="background-image: url('https://i.ibb.co/tDLqQtj/bg.jpg'); background-size: cover;">
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form class="col-md-9" id="frm">
                <div class="AppForm">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <div class=" position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4"><img class="logo2" src="img/logo_light.png"></h2>
                                <p class="menu">
                                <?php if(isset($_SESSION['logged_in'])){ ?>
                                    <a href="logout.php">Logout</a> | <a href="datatable.php">Datatable</a> | <a href="change_password.php">Change Password</a> 
                                <?php } else { ?>
                                    <a href="login.php">Login</a> | <a href="register.php">Register</a> 
                                <?php } ?>    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
<!-- partial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</body>
</html>
