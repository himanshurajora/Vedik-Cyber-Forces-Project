<?php  
    
// Assign image file to variable  
$image_name =  
'https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-15.png';  
     
// Load image file  
$image = imagecreatefrompng($image_name);   
$img = imagescale( $image,600); 
  
// Output image in the browser  
header("Content-type: image/png");  
imagepng($img);  
  
?>  