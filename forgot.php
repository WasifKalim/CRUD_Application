<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login 2</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/style1.css">

</head>
<body>
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form action="forgotpassword_process.php" method= "post" class="col-md-9">
                <div class="AppForm shadow-lg">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="AppFormLeft">

                                <h1>Forgot Password</h1>
                                <div class="form-group position-relative mb-4">
                                    <input type="email" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="username" name="email" placeholder="Email id" required>
                                        <i class="fa fa-user-o"></i>
                                </div>

                                <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                    Submit
                                </button>

                                <p class="text-center mt-5">
                                    Already have an account?
                                    <a href="login.php">
                                        <span>
                                            Login Now
                                        </span>
                                    </a>
                                </p>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4"><a href="index.php"><img class="logo" src="img/logo_light.png"></a></h2>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</body>
</html>
