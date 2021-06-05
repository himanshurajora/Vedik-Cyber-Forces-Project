<?php
include("../conn.php");
session_start();
if(isset($_GET['filename'])){
    $check = "SELECT filename, user FROM prjupload WHERE filename='".$_GET['filename']."' and user='".$_SESSION['username']."'";
    
    if(mysqli_num_rows(mysqli_query($conn, $check)) > 0){
        $q = "DELETE FROM prjupload WHERE filename='".$_GET['filename']."' and user='".$_SESSION['username']."'";
        if(mysqli_query($conn,$q) and unlink("../upload/uploads/".$_GET['filename'])){
            header('location:index.php');
        }
        else{
            echo "SOME ERROR OCCURED";
        }
    }
    else{
        echo "Not The User That Uploaded This File.. We Are Tracking Your IP and You from now 'cause you are suspicious";
    }
}
?>