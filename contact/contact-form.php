<?php
    if(isset($_POST["submit"])) {
        $firstname = $_POST(['first-name']);
        $lastname = $_POST(['last-name']);
        $mailFrom = $_POST(['email']);
        $subject = $_POST(['subject']);
        $message = $_POST(['message']);

        $mailTo = "derekymoy@gmail.com";
        $headers = "From: ".$mailFrom;

        mail($mailFrom, $subject, $headers);
        header("Location: contact.php?mailsend");
    }
?>