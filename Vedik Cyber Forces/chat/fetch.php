<?php 
include("../conn.php");

$q = "SELECT * FROM (SELECT * FROM chat ORDER BY id DESC LIMIT 10) t ORDER BY id ASC";
$result = mysqli_query($conn, $q);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       echo  "<p class='lead' style='padding-right:25px; margin:0px;'>" . $row['message']."<hr></p>";
    }
}
?>