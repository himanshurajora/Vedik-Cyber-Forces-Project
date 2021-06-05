<?php
    include('../conn.php');
    include('../navbar.php');
    $submitted = false;
    if(isset($_POST['submit'])){
        $data = $_POST['data'];
        $audio = $_POST['audio'];
        $know = $_POST['know'];
        $sql = "INSERT INTO audio(data,audio,know) VALUES('".$data."', '".$audio."','".$know."')";
        if(mysqli_query($conn, $sql)){
            $submitted = true;
        }
        else{
            $submitted = false;
            echo mysqli_error($conn);
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Audio Manager</title>
    <?php
    include("../includes.php");
    session_start();
    if($_SESSION['username'] != "admin1234")
    {
        header("location:/");
    }
    ?>

</head>

<body>

    <div class="jumbotron">
        <h2>VCF Audio manager</h2>
    </div>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <label for="head">Heading: </label>
                <input type="text" class="form-control" id="head" name="data">
            </div>
            <div class="form-group">
                <label for="data">Link of the audio:</label>
                <input type="text" class="form-control" id="data" name="audio">
            </div>
            <div class="form-group">
                <label for="data">Data: </label>
                <input type="text" class="form-control" id="data" name="know">
            </div>
            <!-- <div class="form-group">
        <label for="data">Image link: </label>
        <input type="text" class="form-control" id="link" name="link">
    </div> -->
            <div class="form-group">
                <input type="submit" class="btn-primary btn-lg" value="Post" name='submit' id='submit'>
                <?php
                if ($submitted == true) {
                    echo "<p style='color:rgb(40,150,40);'>successfully added to database</p>";
                }
                ?>
            </div>
        </form>
        <p>*Can be seen on the Knowledge page of our website</p>
    </div>
    </div>
    <?php 
        include("../footer.php");
    ?>
    </body> 
</html>