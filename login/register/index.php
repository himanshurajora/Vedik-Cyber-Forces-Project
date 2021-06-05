<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>VCF Admin login</title>
	<?php
	include('../../includes.php');
	?>
</head>

<body>
	<?php
	include('../../navbar.php');
	?>
	<div class="jumbotron">
		<h1>Register</h1>
		<p class="lead">Register with a new username and password</p>
        <b>Note: You must enter your real name in the fullname otherwise your account will be deleted</b>
	</div>
	<div class="container">
		<?php
			include('../../conn.php');
			$success = 2;	
			if(isset($_POST['submit'])){
                $fullname = $_POST['fullname'];
				$username = $_POST['username'];
				$password = $_POST['password'];
			$sql = "INSERT INTO users(fullname, username, password) VALUES('".$fullname."', '".$username."','".$password."')";
			if($username == "admin1234"){
				echo "<p style='color:red'>PLEASE CHOOSE A DIFFERENT USERNAME!!</p>";
			}
			else{
				if(mysqli_query($conn, $sql)){
					$success = 1;
				}
				else{
					$success = 0;
				}
			}
		}
		?>
		<form method="POST">
			<div class="form-group">
				<label for=fullname>Full Name</label>
				<input type="text" name="fullname" class="form-control" placeholder="Enter Your Full Name...">
			</div>
            <div class="form-group">
				<label for=username>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Enter A Unique Username...">
			</div>
			<div class="form-group">
				<label for=password>Password</label>
				<input type="text" name="password" placeholder="Enter A password..." class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="submit" class="btn-primary btn-lg">
			</div>
            <p><a href="/login">Go to login</a></p>
			<?php
			if ($success == 0) {
				echo "<p style='color:red'>some error occured</p>";
			} else if($success == 1){
				echo "<p style='color:green'>Registered Successfully</p>";
			}

			?>
		</form>
	</div>
	<?php 
        include("../../footer.php");
    ?>
</body>

</html>