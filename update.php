<?php

include 'connect.php';

if(isset($_POST['done'])){
	$id =$_GET['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$sql = "UPDATE users SET id=$id,firstname='$firstname',lastname='$lastname',mobile='$mobile',
	email='$email' WHERE id=$id";
	$query = mysqli_query($conn,$sql);
	header('location:display.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
O
</head>
<body>
<div class="col-lg-6 m auto">
	<form method="post">
	<div class="card">
		<div class="card-header">
			<h1 class="text-center">update data</h1>
		</div>
		 <label for="firstname">FirstName:</label>
    <input type="text" id="firstname" name="firstname" ></input>
  </div>
  <div>
    <label for="lastname">LastName:</label>
    <input type="text" id="lastname" name="lastname"></input>
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"></input>
  </div>
  <div>
    <label for="mobile">Mobile:</label>
    <input type="Mobile" id="mobile" name="mobile"></input>
  </div>
  <div>
    <input type="submit" value="Submit" name="done" />
  </div>
	</div>
	</form>
</div>
</body>
</html>