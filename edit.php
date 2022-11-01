<?php include_once('header.php'); 
	//if($_SESSION['logged_in'] == ''){
	//	 header('Location: login.php'); 
	//}
    $id = isset($_GET['id']) ? $_GET['id'] : '';
	if($id){
		$sql = "SELECT * FROM `test` WHERE id = $id";				
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
	}
?>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <form action="submit.php" method="post">
                <div class="AppForm shadow-lg">
                    <div class="row">
                            <div class="AppFormLeft">

                            <!-- <h1>Register</h1>  -->
                                <input type="hidden" name="id" value="<?= isset($row['id']) ? $row['id'] : ''; ?>" />
                                <div class="form-group position-relative mb-4">
                                    <input type="text" value="<?= isset($row['Full_Name']) ? $row['Full_Name'] : ''; ?>" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputname" name="Full_Name" placeholder="Full Name" >
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" value="<?= isset($row['Email_Id']) ? $row['Email_Id'] : ''; ?>" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputEmail" name="Email_Id" placeholder="Email id" >
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" value="<?= isset($row['Phone_Number']) ? $row['Phone_Number'] : ''; ?>" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputNumber" name="Phone_Number" placeholder="Phone Number" >
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                update    
                            </button>

                                <!-- <p class="text-center mt-5">
                                    Already have an account?
                                    <a href="login.php">
                                        <span>
                                            Login Now
                                        </span>
                                    </a>
                                </p> -->

                            </div>
                    </div>
                </div>

            </form>

    </div>
  </div>
</div>
<?php include_once('footer.php'); ?>