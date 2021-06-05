<?php
include('../../includes.php');
include('../../navbar.php');
include('../../conn.php');

echo '<div class="container">
                <h3>Projects: </h3>
                <table id="projectlist" class="table">
                <tr>
                <th>User</th>
                <th>File Name</th>
                <th>Date of Uploading</th>
                <th>Options</th>
                </tr>';
            $loadproject = "SELECT filename, user, time FROM prjupload";
            $result = mysqli_query($conn,$loadproject);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                   $filename =  $row['filename'];
                   $time = $row['time'];
                   $user = $row['user'];
                   echo '<tr>
                   <td>'.
                    $user
                    .'</td>
                    <td>'.
                    $filename
                    .'</td>
                    <td>'.
                    $time
                    .'</td>
                    <td>
                    <a href="/upload/uploads/'.$filename.'" download>Download</a> /
                    <a href="deleteproject.php?filename='.$filename.'" id="deleteprj" data-filename="'.$filename.'">Delete</a>
                    </td>
                   </tr>';
                }
            }
                
            echo   '</table>
            </div>
           <div class="container text-center text-white"> <a href = "/upload" class="btn btn-primary">Upload a new Project</a></div>';

           ?>