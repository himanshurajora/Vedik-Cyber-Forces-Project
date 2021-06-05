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
                <h2 class="text-center">Art Gallery</h2>
                <p class="text-center">The Art That We Create</p>
            </div><!-- End: Intro -->
            <!-- Start: Photos -->
            <div class="row photos">
                <?php
                    include('../conn.php');
                    $q = "SELECT file FROM artgallary";
                    $result = mysqli_query($conn, $q);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<div class="col-sm-6 col-md-4 col-lg-4 item"><a data-lightbox="photos" href="images/'.$row['file'].'"><img class="img-fluid" src="images/'.$row['file'].'"></a></div>';
                        }
                    }
                ?>
            </div><!-- End: Photos -->
        </div>
    </div><!-- End: Lightbox Gallery -->
    <div>
    <?php
        if(isset($_SESSION['username'])){
            if($_SESSION['username'] == 'admin1234'){
                echo '<div class="container">
                <form class="uploadform"  method="POST" enctype="multipart/form-data">
                    <div class="form-group"><label>File Upload</label> <br><input type="file" required name="projectfile"></div>
        
                    <div class="form-group"><input class="btn btn-md btn-primary" type="submit" name="submit"></div>
                </form>
            </div>';
            } 
        }
        include("../footer.php");
    ?>
    <?php
        if(isset($_POST['submit'])){
            if(!empty($_FILES['projectfile'])){
                    $file_name = $_FILES['projectfile']['name'];
                    $file_size = $_FILES['projectfile']['size'];
                    $file_tmp_loc = $_FILES['projectfile']['tmp_name'];
                    $randno = rand();
                    $file_store = "images/".$file_name . $randno;

                    $filepart = pathinfo($file_name);
                    $submit = true;
                    switch(strtolower($filepart['extension']))
                    {
                        case 'jpeg':
                            $image = imagecreatefromjpeg($file_tmp_loc);   
                            $img = imagescale( $image,900); 
                            break;
                        case 'png':
                            $image = imagecreatefrompng($file_tmp_loc);   
                            $img = imagescale( $image,900); 
                            break;
                        case 'jpg':
                            $image = imagecreatefromjpeg($file_tmp_loc);   
                            $img = imagescale( $image,900); 
                            break;
                        case 'gif':
                            $image = imagecreatefromgif($file_tmp_loc);   
                            $img = imagescale( $image,900); 
                            break;    
                        case 'webp':
                            $image = imagecreatefromwebp($file_tmp_loc);   
                            $img = imagescale( $image,900); 
                            
                            break;
                        default:
                            $submit = false;
                            break;
                    }
 
                        echo "<br><hr>UPLOADING...";
                        imagejpeg($img, $file_tmp_loc);
                        if(move_uploaded_file($file_tmp_loc, $file_store)){
                        $q = "INSERT INTO artgallary(file) VALUE('".$file_name . $randno."')";
                        if(mysqli_query($conn, $q))
                        {
                        echo "<p class='lead' style='color:green'>File Uploaded SuccessFully</p>";
                        
                }
                else{
                    echo 'Some error occured';
                }
            }   
    }
}

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>