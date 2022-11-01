<?php 
session_start();
include_once('lib/helper.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtechdb";

$delete = false;

//// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DTech | DataTables</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css'>
<link rel="stylesheet" href="css/style.css">

</head>
<body>
  <?php
$id = isset($_GET['id']) ;
	if($id){
		$sql = "SELECT * FROM `test` WHERE id = $id";				
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
	}
  ?>
<header>
  <div class="container">
    <div class="col-md-12" style="display: flex; justify-content: space-between; align-items: center;">
      <a href="index.php"><img class="logo" src="img/logo.png"></a>
      <h2 style="text-align: right;"><?php  isset($row['Full_Name'])?></h2>
    </div>
  </div>
</header>