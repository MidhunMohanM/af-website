<?php
    if(!empty($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $toEmail = "goluandharshit@gmail.com";

        $mailHeader = "Name: ".$name . "\r\n Email: ".$email. "\r\n Phone: " . $phone .
        "\r\n Message: " . $message;
        if(mail($toEmail, "Contact Mail", $mailHeader)){
            echo "<script>alert('Mail Sent Successfully')</script>";
    }
?>