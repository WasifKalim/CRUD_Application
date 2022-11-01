<?php
//session_start();
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dtechdb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database); // connecting with the database
// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

// $sql = "SELECT * FROM user"; // selecting rows for table user
// $result = mysqli_query($conn, $sql); // takes the query and executes it database
// $rows = mysqli_fetch_assoc($result); // it gives the row as associative array

$id = $_GET['id'];
$sql = "DELETE FROM test WHERE `id` = '$id'"; 
$results = mysqli_query($conn, $sql);


// checking the error if not deleted
if($results){
    $_SESSION['msg'] = "Deleted Successfully."; // message will not be shown because to show the message we will have d
    header('Location: datatable.php');

}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error -----> $err";
}
?>