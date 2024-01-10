<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail']; // corrected variable name
    $numberForm = $_POST['phone']; // corrected variable name
    $message = $_POST['message'];

    $mailTo = "tylerlpowe@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message.\n\nName: ".$name."\nEmail: ".$mailFrom."\nPhone: ".$numberForm."\n\n".$message;

    mail($mailTo, "Message from ".$name, $txt, $headers);

    header("Location: index.html?MessageSent");
    exit(); // add exit to stop further execution
}

?>
