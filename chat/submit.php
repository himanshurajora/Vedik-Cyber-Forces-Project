<?php
    include("../includes.php");
    include("../conn.php");
    session_start();
    $nothing = false;
    $submitted = false;
            $message = $_POST['message'];
            if($message == ""){
                $nothing = true;
            }
            else{
                $sql = "INSERT INTO chat(username, message) VALUES('".$_SESSION['username']."','".$message."')";
                mysqli_query($conn, $sql);
        }
?>