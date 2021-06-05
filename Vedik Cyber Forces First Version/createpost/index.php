<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Posts</title>
    <?php
    include("../includes.php");
    include("../conn.php");
    $submitted = false;
    $message = false;
    if (isset($_POST['submit'])) {
        $head = $_POST['head'];
        $post = $_POST['data'];
        // $link = $_POST['link'];
        $q = "INSERT INTO posts(head, data) VALUES('" . $head . "', '" . $post . "')";
        if ($head != "" && $post != "") {
            if (mysqli_query($conn, $q)) {
                $submitted = true;
            } else {
                echo "error" . mysqli_error($conn);
                $submitted = false;
            }
        } else {
            $message = true;
        }
    }
    ?>
    
</head>

<body>
    <?php
    include('../navbar.php');
    ?>
    <div class="jumbotron">
        <h2>VCF DATABASE PORTAL</h2>
    </div>
    <div class="container">
        <h2>Welcome to post creater of our website</h2>
        <p>at this place you can create any post here without showing you identity ever and communicate to us without any fear</p>
        <form method="POST">
            <div class="form-group">
                <label for="head">Heading </label>
                <input type="text" class="form-control" id="head" name="head">
            </div>
            <div class="form-group">
                <label for="data">Data: </label>
                <input type="text" class="form-control" id="data" name="data">
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
                if ($message == true) {
                    echo "<p style='color:red'>*fill something here</p>";
                }
                ?>
            </div>
        </form>
        <p>*posts can be seen in the explore page of our website</p>
    </div>
    <div class='container text-left'>
        <a href="../" class="btn-primary btn-lg">
            <<-Home</a> </div> </body> </html>