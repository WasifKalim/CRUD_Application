<?php
include('header.php');
$email = $_POST['email'];
$currentPassword = sha1($_POST['current_password']);
$newPassword = sha1($_POST['new_password']);
$confirmpassword = sha1($_POST['confirm_password']);
if($newPassword != $confirmpassword) {
    header('Location: change_password.php?message=New and Confirm password does not match!');
}

$sql = "SELECT * FROM `test` WHERE Email_Id = '$email' AND Password = '$currentPassword'";
$result = mysqli_query($conn,$sql);
$rowCount = mysqli_num_rows($result);
if($rowCount > 0) {
    $sql = "UPDATE `test` set Password = '$newPassword' WHERE Email_Id = '$email'";	
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_affected_rows($conn);
    if($rowCount > 0) {
        header("Location:index.php?message=Password change successfully!");
        die;
    }
} else {
    header("Location: change_password.php?message=Email is incorrect!"); 
    die;
}
?>