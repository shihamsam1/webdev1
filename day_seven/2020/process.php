<?php

$name = "";
$email = "";
$subject = "";
$message = "";

 if(isset($_POST["submit"])){
     $name = $_POST['user_name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     // save in the DB
     // do whatever processing you want to do

 }



?>

<html>
    <head>
        <title>Processing Page</title>
    </head>
<body>
    <h1>Processed Info</h1>
    <div>
        <label>Name: <?php echo $name ?></label> <br>
        <label>Email: <?php echo $email ?></label> <br>
        <label>Subject: <?php echo $subject ?></label> <br>
        <label>Message: <?php echo $message ?></label>
    </div>
</body>

</html>