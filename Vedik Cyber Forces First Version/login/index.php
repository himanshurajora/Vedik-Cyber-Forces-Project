<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>VCF Admin login</title>
	<?php
	include('../includes.php');
	session_start();
    if(isset($_SESSION['username']))
    {
    	header("location:admintools");
    }
	?>
</head>

<body>
	<?php
	include('../navbar.php');
	?>
	<div class="jumbotron">
		<h1>Admin Login</h1>
		<p class="lead">login with admin username and password to unlock the updatemanager, audiomanager, databases and get full control on this website</p>
	</div>
	<div class="container">
		<?php
			include('../conn.php');
			$success = 2;	
			if(isset($_POST['submit'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
			$sql = "SELECT username, password FROM admin where username='".$username."' and password='".$password."'";
			if(mysqli_num_rows(mysqli_query($conn, $sql)) > 0){
				$success = 1;
				$_SESSION['username'] = $username;
				header('location:admintools');
			}
			else{
				$success = 0;
			}
		}
		?>
		<form method="POST">
			<div class="form-group">
				<label for=username>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Enter the username...">
			</div>
			<div class="form-group">
				<label for=password>Password</label>
				<input type="password" name="password" placeholder="Enter the password..." class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="submit" class="btn-primary btn-lg">
			</div>
			<?php
			if ($success == 0) {
				echo "<p style='color:red'>username or password did not match</p>";
			} else if($success == 1){
				echo "<p style='color:green'>username or password matched</p>";
			}
			?>
		</form>
	</div>
</body>

</html>