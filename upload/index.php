<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Project</title>
    <?php
    include("../includes.php");
    ?>
</head>

<body>
    <?php
    session_start();
    ?>
    
    <?php 
        include("../conn.php");
        
        if(!isset($_SESSION['username'])){
            header('location:/login');
        }
        else{
            include("../navbar.php");
        if(!empty($_FILES)){
            if(isset($_POST['submit'])){
            echo "Wait a minute it may take time, depends on file size and internet speed";
            $file_name = $_FILES['projectfile']['name'];
            $file_size = $_FILES['projectfile']['size'];
            $file_tmp_loc = $_FILES['projectfile']['tmp_name'];
            $randno = rand();
            $parts = pathinfo($file_name);
            $exten = strtolower($parts['extension']);
            $filename = $parts['filename'];
            $file_store = "uploads/".$filename . $randno . ".". $exten;
            $date =  date('l jS \of F Y h:i:s A');  
            if($file_size > 20971520){
                echo "<br><hr><p style='color:red'>File Size Must Be Smaller Then 20MB</p>";
            }
            else{
                echo "<br><hr>UPLOADING...";
                if(move_uploaded_file($file_tmp_loc, $file_store)){
                    $q = "INSERT INTO prjupload(filename, user, time) VALUES('".$filename . $randno . "." . $exten."', '".$_SESSION['username']."', '".$date."')";
                    if(mysqli_query($conn, $q))
                    {
                    echo "<p class='lead' style='color:green'>File Uploaded SuccessFully</p>";
                    }
                }
            }
        }
    }
}
    ?>

<div class="jumbotron">
        <h2>Upload Your Project</h2>
        <b>Note: We recommand you to compress your project and keep the size less then 20 MB otherwise it wont get uploaded to the server</b>
        <p>It may take several minutes, Usually it takes less then 5 minutes</p>
    </div>
    <div class="container">
        <form class="uploadform"  method="POST" enctype="multipart/form-data">
            <div class="form-group"><label>File Upload</label> <br><input type="file" name="projectfile"></div>

            <div class="form-group"><input class="btn btn-md btn-primary" type="submit" name="submit"></div>
        </form>
    </div>
    <?php 
        include("../footer.php");
    ?>
</body>

</html>