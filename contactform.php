<?php
    
    if (isset($_POST['submit'])) {
    header('Location: contactSend.php');
    $profession = $_POST['profession'];
    $mailFrom = $_POST['e-mail'];
    $message = $_POST['message'];

    $mailTo = "maisonlaffore@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from".$name.".\n\n".$message;

    mail($mailTo, $message, $txt, $headers);
}  
?>
