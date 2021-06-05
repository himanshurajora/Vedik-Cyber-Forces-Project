<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore</title>
        <?php 
            include("../includes.php");
        ?>
</head>
<body>
<?php
    include('../navbar.php');
    ?>
<div class="jumbotron">
        <h2>VCF EXPLORE PORTAL</h2>
        <p>do you know what we did today?</p>  
    </div>
    <div class="container">
    <a href="../" class="btn-primary btn-lg"><<-Home</a>
    </div>
    <br><br><hr>
    <div class="container">
    
        <?php
            include("../conn.php");
            $r = "SELECT head,data FROM posts ORDER BY id DESC";
            $q = mysqli_query($conn, $r);
            if(mysqli_num_rows($q) > 0){
                while($row = mysqli_fetch_assoc($q)){
                    // $imglink = $row['link'];
                    echo "<h3>".$row['head']."</h3>".
                        "<p class='lead'>".$row['data']."</p><hr>";
                    //  echo "<img src='$imglink' alt='image'>";   
                }
            }
            $conn -> close();
        ?>
        
    </div>
    <?php 
        include("../footer.php");
    ?>
</body>
</html>