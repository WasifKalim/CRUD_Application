<?php
include_once('header.php');
$email = $_POST['email'];
$password = sha1($_POST['password']);
$sql = "SELECT * FROM `test` WHERE Email_Id = '$email' AND Password = '$password'";	
		
$result = mysqli_query($conn,$sql);
$rowCount = mysqli_num_rows($result);
//$rowCount = mysqli_($result);

if($rowCount > 0) {
    $_SESSION['logged_in'] = 1;
    $_SESSION['email'] = $email;
    header('location:datatable.php');

} else {
    header("location: login.php?message=User/Password is incorrects!"); 
}
?>