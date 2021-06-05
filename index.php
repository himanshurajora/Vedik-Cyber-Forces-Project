
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VCF</title>
    <meta keywords="Vedik Cyber Forces, this website is all about vedik cyber forces vcf studio vcf VCF vedik cyber forces">
    <meta discription="this website is all about vedik cyber forces">
    <meta content="our website is about vedik cyber forces, our website is about vcf studio, vcfstudio">
    <meta content="this is the official cite of vedik cyber forces, vcfstudio, vcf studio">
    <link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <?php 
    include('includes.php');
    session_start();
    ?>
    <style>
        *{
            font-family: 'Tenali Ramakrishna', sans-serif;
            font-size:20px;
        }
        .font-roboto{
            font-family: 'Anton', sans-serif;
        }
    </style>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<link rel="stylesheet" href="custom.css">
</head>
<body class="">

    <?php
    include("navbar.php");
    ?>
    <div class="jumbotron text-dark text-center bg-light" id="jmb"  style = "background-size: cover; color:white; background-image:url('http://data.vcfstudio.in/images/img/homebackmain.jpg');">
        <h1 class="font-roboto">Vedik Cyber Forces</h1>
        <p class="lead">You Are Welcome!!</p>
        <p class="lead">Devs: VCF Team <a class="btn text-white" href="members" style="background-color: rgb(20, 80, 200);">Members</a></p>
        <hr class="my-2">
        <p>A New Thought</p>
        <a href="like.php" class="btn-primary btn-lg" id="likebtn">Like Our Website</a>
        <p class="lead">
            <?php 
            include('conn.php');
            $like = 1;
            $r1 = "SELECT likes FROM likes WHERE id=1";
            $val = mysqli_query($conn, $r1);
            if(mysqli_num_rows($val) > 0)
            {
            $row = mysqli_fetch_assoc($val);
            echo "<p>Total likes: ".$row['likes']."</p>";
            }
            ?>
        </p>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#cngbg").click(function()
                {
                  $("#jmb").toggleClass("jairam");
                  $("#likebtn").toggleClass("f60");
                  $("#jmb").toggleClass("text-light");
                  // $("#cngbg").toggleClass("f60");
                });
            });
            
        </script>
        <!-- <button class="btn-primary" id="cngbg" onclick="javascript:changebg()">Enable/Disable Background</button> -->
        <?php 
        echo date('l jS \of F Y h:i:s A');
        ?>
    </div>    
    <div class="container text-center">
    <h1><: <u>Updates</u> :></h1>
    <!-- <br>
        <p class="lead">पितामह भीष्म और श्री कृष्ण का अंतिम संवाद (Just For Inspiration)</p>
        <audio controls>
            <source src="https://freesound.org/data/previews/500/500296_10839052-lq.mp3" type="audio/mp3">
        </audio>
    <embed name="myMusic" src="audio/b.mp3" type="audio/mp3" autostart="true" loop="true">
    <p>Now we gonna use only english because it's easy to type</p>
    <div class="border">
    <p class="padding-10">I have gone in a diffrent way than the current world i wanna change it but cant 'cause i dont wanna waste more time in selecting a direction i am just gonna go in the direction that i currently have.. i have made some mistakes but can not go back in my life and fix 'em</p>    
    <audio class="padding-10" controls>
        <source src="audio/RakrRJil.wav" type="audio/wav">
    </audio></div>
    <p>For more audios like this go to the Knowledge page</p> -->
    </div>
    <hr>
    <br>
    <div class="container-fluid">
        <div class="row">
    <?php
        $sql = "SELECT head,pic,data,audio FROM updates ORDER BY id DESC";
        $que = mysqli_query($conn, $sql);
        if(mysqli_num_rows($que) > 0){
            while($row2 = mysqli_fetch_assoc($que)){
                $head = $row2['head'];
                $pic = $row2['pic'];
                $data = $row2['data'];
                $audio = $row2['audio'];
                
                if($audio != ""){
                echo '<div class="text-center col-sm-6 border padding-10">
                <h3>' . $head . '</h3>
                <img src="'.$pic.'" alt="'.$head.'" class="img-thumbnail" width="400" height="auto"><br><br>
                <audio controls>
                    <source src="'.$audio.'">
                </audio><br><br>
                <p class="lead">'.$data.'</p>
            </div><hr>';
            }
            else{
                echo '<div class="text-center col-sm-6 border padding-10">
                <h3>' . $head . '</h3>
                <img src="'.$pic.'" alt="'.$head.'" class="img-thumbnail" width="400" height="auto"><br><br>
                <p class="lead">'.$data.'</p>
            </div><hr>';
            }

            }
        }
    ?>
    </div>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>
