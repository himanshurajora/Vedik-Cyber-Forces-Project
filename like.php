<?php 

include('conn.php');
session_start();
if(!isset($_SESSION['username']))
{
    header('location:/login');
}
else{
    $like = 1;
    $likable = 1;
$r1 = "SELECT likes FROM likes WHERE id=1";
$val = mysqli_query($conn, $r1);
if(mysqli_num_rows($val) > 0){
    $row = mysqli_fetch_assoc($val);
    $likes =  $row['likes'];
}
$like = $like + $likes;
$r = "UPDATE likes SET likes='".$like."' where id=1";
$q = "INSERT INTO likes(likes,user) VALUES('".$likable."', '".$_SESSION['username']."')";
if(mysqli_query($conn, $r) and mysqli_query($conn,$q)){
    echo "like added";
    die(header("location:index.php"));
}
else{
    echo "not added some error occured!!";
    echo mysqli_error($conn);
}
}
// $q = "INSERT INTO likes(likes) VALUE('".$like."')";
// if(mysqli_query($conn, $q)){
//     echo "success";
// }
// else{
//     echo mysqli_error($conn);
// }
?>