<?php
include("../../conn.php");
session_start();
if($_SESSION['username'] != "admin1234"){
    header('location:/');
}
if(isset($_GET['filename'])){
    $q = "DELETE FROM prjupload WHERE filename='".$_GET['filename']."'";
        if(mysqli_query($conn,$q) and unlink("../../upload/uploads/".$_GET['filename'])){
            header('location:allprojects.php');
        }
        else{
            echo "SOME ERROR OCCURED";
        }
}

?>