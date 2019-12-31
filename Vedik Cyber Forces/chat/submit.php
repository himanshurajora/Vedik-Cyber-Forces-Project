<?php
    include("../includes.php");
    include("../conn.php");
    $nothing = false;
    $submitted = false;
            $message = $_POST['message'];
            if($message == ""){
                $nothing = true;
            }
            else{
                $sql = "INSERT INTO chat(message) VALUE('".$message."')";
                mysqli_query($conn, $sql);
        }
?>