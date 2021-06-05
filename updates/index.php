<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCF</title>
    <?php 
     include('../includes.php');
     include('../conn.php');
    ?>
     <?php
     session_start();
    if($_SESSION['username'] != "admin1234")
    {
        header("location:/");
    }
    ?>
</head>
<body>
    <?php 
    include("../navbar.php");
    ?>
    <div class="jumbotron">
        <h1>Welcome to updates manager</h1>
        <p class="lead">Here you can create, update and delete any updates that are shown on the vcf home page</p>
    </div>
    <?php
    $submitted = false;
    if(isset($_POST['submit'])){
        
        $head = $_POST['head'];
        $pic = $_POST['pic'];
        $data = $_POST['data'];
        $audio = $_POST['audio'];
        $q = "INSERT INTO updates(head, pic, data, audio)
              VALUES('".$head."', '".$pic."','".$data."','".$audio."')";
            
        if(mysqli_query($conn, $q)){
            $submitted = true;
        }
        else{
            echo mysqli_error($conn);
            $submitted = false;
        }

    }
    ?>
    <div class="container">
        <h3>Create a post: </h3>
    <form method="POST">
            <div class="form-group">
                <label for="head">Heading: </label>
                <input type="text" class="form-control" id="head" name="head">
            </div>
            <div class="form-group">
                <label for="pic">Link of pic (optional): </label>
                <input type="text" class="form-control" id="head" name="pic">
            </div>
            <div class="form-group">
                <label for="data">Data: </label>
                <input type="text" class="form-control" id="data" name="data">
            </div>
            <div class="form-group">
                <label for="audio">Link of audio (optional):</label>
                <input type="text" class="form-control" id="head" name="audio">
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
    </div>
</body>
</html>