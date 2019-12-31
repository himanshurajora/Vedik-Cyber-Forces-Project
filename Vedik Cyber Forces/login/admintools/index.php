<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCF ADMIN TOOLS</title>
    <?php
    include("../../includes.php");
    ?>
    <?php
     session_start();
    if(isset($_SESSION['username']))
    {

    }
    else{
        header("location:../login");
    }
    ?>
</head>
<body>
    <?php 
        include('../../navbar.php');
    ?>
    <div class="jumbotron">
        <h1>VCF ADMIN TOOLS</h1>
    </div>
    <div class="container text-center">
        <div class="row text-center">
            <ol>
                <li>
                    <div class="col-sm-3"><a class=" btn btn-lg btn-danger" href="/site/updates">Update Manager</a></div>
                </li>
                <br>
                <li>
                    <div class="col-sm-3"><a class=" btn btn-lg btn-danger" href="/site/audiomanager">Audio Manager</a></div>
                </li>
            </ol>
        </div><br><br>
        <a href="logout.php" class="btn btn-success btn-lg">Log Out</a>
    </div>
</body>
</html>