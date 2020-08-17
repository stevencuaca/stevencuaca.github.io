<?php
    // Reciver email
    $to = "cuacasteven@gmail.com";

    // Sender name
    $name = $_POST['Name'];

    // Sender email address
    $email = $_POST['Email'];

    // the message
    $msg = $_POST['Message'];

    // Subject email
    $subject = "From Portofolio Website - " . $name;

    // send email
    mail($to,$subject,$msg);
?>