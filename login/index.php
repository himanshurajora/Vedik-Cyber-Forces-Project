<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>VCF login</title>
	<?php
	include('../includes.php');
    include('../conn.php');
	session_start();
    if(isset($_SESSION['username'])){
        if($_SESSION['username'] == "admin1234"){
            header("location:admintools");
        }
    }
	?>
</head>
<body>
    <?php
    include('../navbar.php');
	?>
    <?php
        if(!isset($_SESSION['username'])){
            echo '
	<div class="jumbotron">
		<h1>You Need To Login</h1>
		<p class="lead">login with username and password to unlock the Chatting page and create a digital identity on vcfstudio.in</p>
        <p class="lead" id="response"></p>
	</div>
	<div class="container">
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
		</form>
        <p><a href="register">Dont have a account? Register Now.</a></p>

	</div>';
        }
        else{
            echo '<div class="jumbotron"><h2>Session Username is '. $_SESSION['username'] .'</h2> <br>';
            echo "<a  class='btn-danger btn-lg' href='/logout.php'>Log Out</a></div>";

            echo '<div class="container">
                <h3>Projects: </h3>
                <table id="projectlist" class="table">
                <tr>
                <th>File Name</th>
                <th>Date of Uploading</th>
                <th>Options</th>
                </tr>';
            $loadproject = "SELECT filename, user, time FROM prjupload WHERE user='".$_SESSION['username']."'";
            $result = mysqli_query($conn,$loadproject);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                   $filename =  $row['filename'];
                   $time = $row['time'];
                   echo '<tr>
                    <td>'.
                    $filename
                    .'</td>
                    <td>'.
                    $time
                    .'</td>
                    <td>
                    <a href="/upload/uploads/'.$filename.'" download>Download</a> /
                    <a href="deleteproject.php?filename='.$filename.'" id="deleteprj" data-filename="'.$filename.'">Delete</a>
                    </td>
                   </tr>';
                }
            }
                
            echo   '</table>
            </div>
           <div class="container text-center text-white"> <a href = "/upload" class="btn btn-primary">Upload a new Project</a></div>';
            
        }
?>
    <?php
			include('../conn.php');	
            $success =2;
			if(isset($_POST['submit'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
			$sql = "SELECT username, password FROM users where username='".$username."' and password='".$password."'";
			if(mysqli_num_rows(mysqli_query($conn, $sql)) > 0){
				$success = 1;
                echo '<script>$("#loginlink").html("Account");</script>';
				$_SESSION['username'] = $username;
            }
			else{
				$success = 0;
			}
		}
		?>
         <?php
    
			if ($success == 0) {
				echo '<script>
                var response = document.getElementById("response");
                response.innerHTML = "<b';
                echo " style='color:red'>username or password is not correct</b>";
                echo '"';
                echo '
                </script>';
			} else if($success == 1){
				echo '<script>
                var response = document.getElementById("response");
                response.innerHTML = "<b';
                 echo " style='color:green'>Logged In Successfully</b> <a href='/chat'>Go to Chatting</a>";
                 echo '"';
                echo "</script>";
			}
        ?>
</body>

</html>