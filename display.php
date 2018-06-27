
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
<div class="col-lg-12">
	
	<h1>show data</h1>
	<table class="table table-striped table-hover table-bordered">
		<tr>
			<th>ID</th>
			<th>FIRSTNAME</th>
			<th>LASTNAME</th>
			<th>EMAIL</th>
			<th>MOBILE</th>
			<th>DELETE</th>
			<th>EDIT</th>
		</tr>

           <?php
           include 'connect.php';

	// $firstname = $_POST['firstname'];
	// $lastname = $_POST['lastname'];
	// $email = $_POST['email'];
	// $mobile = $_POST['mobile'];
	$sql = "select * from users ";
	$query = mysqli_query($conn,$sql);
    while ($res = mysqli_fetch_array($query)) {
    	
    

?>

		<tr>
			<td><?php echo $res['id'];?></td>
			<td><?php echo $res['firstname'];?></td>
			<td><?php echo $res['lastname'];?></td>
			<td><?php echo $res['email'];?></td>
			<td><?php echo $res['mobile'];?></td>
			<td> <button class="del"> <a href="delete.php?id=<?php echo $res['id'];?>"> delete</a></button>
			</td>
			<td> <button class="update"> <a href="update.php?id=<?php echo $res['id'];?>">update</a></button>
			</td>
			
		</tr>

		<?php
		    }
		?>
	</table>
</div>
</div>
</body>
</html>