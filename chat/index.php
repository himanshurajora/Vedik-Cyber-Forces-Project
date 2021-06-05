<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="../custom.css">
    <?php
    include("../includes.php");
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:/login");
    }
        // include("../conn.php");
    // $nothing = false;
    // $submitted = false;
    //     if(isset($_POST['send'])){
    //         $message = $_POST['message'];
    //         if($message == ""){
    //             $nothing = true;
    //         }
    //         else{
    //             $sql = "INSERT INTO chat(message) VALUE('".$message."')";
    //             if(mysqli_query($conn, $sql)){
    //                 $submitted = true;
    //             }
    //             else{
    //                 echo mysqli_errno($conn);
    //             }
    //         }
    //     }
    ?>
   <script>
$(document).ready(function(){
    $('#msg').submit(function(){
     
        $.ajax({
            type: 'POST',
            url: 'submit.php', 
            data: $(this).serialize()
        })
        .done(function(data){
             
            // show the response
            $('#result').html('sent');
            document.getElementById("message").value = null;
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Posting failed." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;
 
    });
});
</script>
</head>

<body>

    <?php
    include('../navbar.php');

    ?>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
    <div class="container padding-10">
        <h2>Welcome to the Chat room</h2>
        <p>Feel free, ask anything</p>
    </div>
    <script>
        $(document).ready(function() {
            loadstation();
        });

        function loadstation() {
            $("#room").load("fetch.php");
            setTimeout(loadstation, 800);
        }
    </script>
    <div class="container border padding-10 text-right" id="room" name="room" style="height:500px; overflow:auto;">

        <!-- <p  class="lead" style='padding-right:25px; margin:0px;'>hello</p> -->
    </div>
    <div class="container text-center">

        <form id="msg">
            <div class="border" style="padding: 4px; margin-top:3px;">
            <input type="text" value="" id="message" placeholder="Enter Your Message..." name="message" class="form-control text-center" style="margin-top:5px; font-size:20px;">
            <input type="submit" value="Send" name="send" class="btn-primary form-control" style="margin-top:5px;">
            </div>
        </form>
        <p style='color:rgb(50,150,50)' id="resul"></p>

    </div>
</body>

</html>