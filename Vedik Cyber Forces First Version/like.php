<?php 

include('conn.php');
$like = 1;
$r1 = "SELECT likes FROM likes WHERE id=1";
$val = mysqli_query($conn, $r1);
if(mysqli_num_rows($val) > 0){
    $row = mysqli_fetch_assoc($val);
    $likes =  $row['likes'];
}
$like = $like + $likes;
$r = "UPDATE likes SET likes='".$like."' where id=1";
 mysqli_query($conn, $r);
if(mysqli_query($conn, $r)){
    echo "like added";
    header("location:index.php");
}
else{
    echo "not added some error occured!!";
}
// $q = "INSERT INTO likes(likes) VALUE('".$like."')";
// if(mysqli_query($conn, $q)){
//     echo "success";
// }
// else{
//     echo mysqli_error($conn);
// }
?>