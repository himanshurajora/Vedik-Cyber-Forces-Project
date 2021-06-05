<?php 
include("../conn.php");
session_start();
$q = "SELECT * FROM (SELECT * FROM chat ORDER BY id DESC LIMIT 10) t ORDER BY id ASC";
$result = mysqli_query($conn, $q);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result))
    {
        if($row['username'] == $_SESSION['username'])
        {
           echo "<p style='text-align:right; background:rgb(181, 181, 181); padding:10px; border-radius:7px;'>".$row['message']."<sup style='color:green; font-size:10px; '>"."me"."</sup>&lt;--</p>
           <hr style='margin:0px;'>";
            }  
        else
        {
           echo "<p style='text-align:left;background: rgb(200,230,200);padding:10px; border-radius:7px;'>--&gt;".$row['message']."<sup style='color:green; font-size:10px; '>".$row['username']."</sup></p>
           <hr style='margin:0px;'>";

        }
    }
}
?>