<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $panno = $_POST['panno'];
    $nationality = $_POST['nationality'];
    $transtion_id = $_POST['transtion_id'];

    // Database connection
//    $conn = new mysqli('localhost', 'root', '', 'arita_db');
//    if ($conn->connect_error) {
//        die('Connection Failed : '.$conn->connect_error);
//    } else {
//        $stmt = $conn->prepare("insert into donate(name, address, phone, email_address, amount, pan_card, nationality, transtion_id) values(?, ?, ?, ?, ?, ?, ?, ?)");
//        $stmt->bind_param("ssssssss", $name, $address, $phone, $email, $amount, $panno, $nationality, $transtion_id);
//        $stmt->execute();
//        echo "Donation was done";
//        $stmt->close();
//        $conn->close();
//    }

    // Send Email 

error_reporting(-1);
ini_set('display_errors', 'On');
    // $email_to = """;
    // $email_subject = "Donation";
    // $email_message = "";
    // $email_message .= "Name: ".($name)."\n";
    // $email_message .= "Email: ".($email)."\n";
    // $email_message .= "Phone: ".($phone)."\n";
    // $email_message .= "Address: ".($address)."\n";
    // $email_message .= "Amount: ".($amount)."\n";
    // $email_message .= "Pan No: ".($panno)."\n";
    // $email_message .= "Nationality: ".($nationality)."\n";
    // $email_message .= "Transaction ID: ".($transtion_id)."\n";
    
    // $From = 'AtriaFoundatio@atriafoundationafoundation.orgmail.comg';
    // $reply_to = 'noreply@atriafoundation.org';
    // // create email headers
    // $headers = 'From: '.$From."\r\n".
    // 'Reply-To: '.$reply_to."\r\n" .
    // 'X-Mailer: PHP/' . phpversion();
    // $re = mail($email_to, $email_subject, $email_message, $headers);  
    // echo $re;
    
        $to = "atriafoundation.org@gmail.com";
         $subject = "Donation";
         
         $message = "<p>Name : $name</p>";
         $message .= "<p>Email : $email</p>";
         $message .= "<p>Phone : $phone</p>";
         $message .= "<p>Address : $address</p>";
         $message .= "<p>Amount : $amount</p>";
         $message .= "<p>Pan No : $panno</p>";
         $message .= "<p>Nationality : $nationality</p>";
         $message .= "<p>Transaction ID : $transtion_id</p>";
         
         $header = "From:noreply@atriafoundation.org \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

?>
