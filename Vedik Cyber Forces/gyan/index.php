<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gyan</title>
    <?php
    include("../includes.php");
    ?>
</head>

<body>
    <?php
    include('../navbar.php');
    ?>
    <div class="jumbotron">
        <h2>Welcome to the Gyan Page --><br><abbr title="Vedik Cyber Forces">VCF</abbr></h2>
        <p class="lead">On this page you will find some really good knowledge about snatan dharma</p>
    </div>
    <div class="container">
    <?php
        include('../conn.php');
        $sql = "SELECT data,audio,know FROM audio ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                if($row['audio'] == ""){
                    echo '<p>'.$row['data'].':</p>
                <p>'.$row['know'].'</p>
                <hr>';
                }
                else{
                    echo '<p>'.$row['data'].':</p>
        <audio controls>
            <source src="' .$row['audio'].'" type="audio/mp3">
        </audio>
        <p>'.$row['know'].'</p>
        <hr>';
                }
            }
        }
    ?>
    </div>
    <!-- <div class="container">
        
        <p>जब हनुमान जी को लगा के मै न होता तो क्या होता: </p>
        <audio controls>
            <source src="https://freesound.org/data/previews/500/500297_10839052-lq.mp3" type="audio/mp3">
        </audio>
        <p>शिक्षा : ईश्वर की इच्छा के बिना कुछ भी नहीं हो सकता, परन्तु अच्छे कर्म करने वालो का ईश्वर सदैव समर्थन करता है अतः केवल भाग्य के भरोसे भी नहीं बैठना चाहिए।</p>
        <hr>
        <p>भविष्य पुराण में ईसामसीह व मोहम्मद के बारे में क्या बताया गया है :</p>
        <p>ईसामसीह के बारे में :</p>
        <audio controls>
            <source src="https://freesound.org/data/previews/500/500299_10839052-lq.mp3" type="audio/mp3">
        </audio>
        <p>मोहम्मद के बारे में : </p>
        <audio controls>
            <source src="https://freesound.org/data/previews/500/500298_10839052-lq.mp3" type="audio/mp3">
        </audio>
        <hr>
    </div> -->

    <h3 class="text-center">More audio files will be added soon....</h3>

</body>

</html>