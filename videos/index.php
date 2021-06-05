<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>artgallary</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=17be2868455611f722ff0d83f7e43c2d">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>
    <?php
        include("../navbar.php");
        session_start();
    ?>
    <!-- Start: Lightbox Gallery -->
    <div class="photo-gallery">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Video</h2>
                <p class="text-center">Some Of Our Videos</p>
            </div><!-- End: Intro -->
            <!-- Start: Photos -->
            <div class="row">
            <?php
                    include('../conn.php');
                    $q = "SELECT file FROM artgallary";
                    $result = mysqli_query($conn, $q);
                    
                    // if(mysqli_num_rows($result) > 0){
                    //     while($row = mysqli_fetch_assoc($result)){
                    //         echo '<div class="col-sm-6 col-md-4 col-lg-4 item"><a data-lightbox="photos" href="images/'.$row['file'].'"><img class="img-fluid" src="images/'.$row['file'].'"></a></div>';
                    //     }
                  
                ?>
            <div class="text-center col-sm-6 padding-10">
            <iframe width="450" height="300" 
            src="https://www.youtube.com/embed/xpW6l6QC_fo" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
            </div>
            </div>
                
            </div><!-- End: Photos -->
        </div>
    </div><!-- End: Lightbox Gallery -->
    <div>
    <?php
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == 'admin1234'){
                echo '<div class="container">
                <form class="uploadform"  method="POST" enctype="multipart/form-data">
                    <div class="form-group"><br><input type="text" placeholder="Youtube Source"required name="src"></div>
        
                    <div class="form-group"><input class="btn btn-md btn-primary" type="submit" name="submit"></div>
                </form>
            </div>';
            } 
        }
        include("../footer.php");
    ?>
    <?php
        if(isset($_POST['submit'])){
                        $q = "INSERT INTO artgallary(file) VALUE('".$file_name . $randno."')";
                        if(mysqli_query($conn, $q))
                        {
                        echo "<p class='lead' style='color:green'>Data Inserted</p>";
                        }
                else{
                    echo 'Some error occured';
                }
}

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>