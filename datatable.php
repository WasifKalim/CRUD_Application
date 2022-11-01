<?php include_once('header.php');
if($_SESSION['logged_in'] != 1){
  header('location:login.php');
}
 ?>
 <div style="float:right; margin: 10px 35px 20px ;">
  <a href="logout.php"><button style="padding: 3px 78px 3px 86px; background-color: whitesmoke;">LOGOUT</button></a>
 </div>
<div style="float:right; margin: 10px 35px 20px ;    ">
  <a href="edit.php"><button style="padding: 3px 78px 3px 86px; background-color: whitesmoke;" > Add</button></a>
</div>
<div class="container">
  <div class="row"> 
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
        <thead>
          <tr>
            <th>id</th>
            <th>Full_Name</th>
            <th>Email_Id</th>
            <th>Phone_Number</th>
            <th>Action</th>
          </tr>
        </thead>
		<tbody>
         <?php
			$sql = "SELECT * FROM `test`";				
	    	$result = mysqli_query($conn,$sql);
			$id = 0;
			while($rows = mysqli_fetch_assoc($result)){
				$id= $id + 1;
			?> 
				<tr>
					<td><?php echo $rows['id'] ?></td>
					<td><?php echo $rows['Full_Name'] ?></td>
					<td><?php echo $rows['Email_Id'] ?></td>
          <td><?php echo $rows['Phone_Number'] ?></td>
					<td><a href="edit.php?id=<?php echo $rows['id'] ?>" >Edit</a>
					<a href= "delete.php?id=<?php echo $rows['id'] ?>">Delete</a> </td>
				</tr>
			<?php
			}
			?>
			</tbody>
        
        <!-- <tfoot>
          <tr>/
            <td colspan="5" class="text-center">Data retrieved from <a href="" target="_blank">infoplease</a> and <a href="#" target="_blank">worldometers</a>.</td>
          </tr>
        </tfoot> -->
      </table>

    </div>
  </div>
</div>
<?php include_once('footer.php'); ?>