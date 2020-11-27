<?php

include("dbconnect.php");

$name=$_REQUEST['name'];
$email=$_REQUEST['mail'];
$phone=$_REQUEST['phoneno'];
$msg=$_REQUEST['message'];

$query=mysqli_query($db_connect,"INSERT INTO user(name,email,phone,message) VALUES ('$name','$email','$phone','$msg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
?>
<html>
    <head>
       <title>Contactus</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="actionbody">
        <section class="innerpage">
          <h1 class="contacth1">Thank you for your response</h1>
          <h1 class="contacth1">We will reach out to you</h1>
        </section>
    </body>
</html>
