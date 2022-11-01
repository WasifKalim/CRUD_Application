<?php
include('header.php');
$email = $_POST['email'];
$password = randomPassword();
$userPassword = sha1($password);
$sql = "UPDATE `test` set Password = '$userPassword' WHERE Email_Id = '$email'";	
		
$result = mysqli_query($conn,$sql);
$rowCount = mysqli_affected_rows($conn);

if($rowCount > 0) {
    header("Location: login.php?password=$password");
} else {
    header("Location: account_forgot.php?message=Email is incorrect!"); 
}
?>