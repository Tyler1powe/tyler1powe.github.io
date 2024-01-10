<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
  $mailform = $_POST['mail'];
  $numberform = $_POST['phone'];
  $message = $_POST['message'];

  $mailTo = "tylerlpowe@gmail.com";
  $headers = "From: '.$mailFrom;
  $txt = "You have a message ".$name".\n\n".$message'.$numberform;

  mail($mailTo, $name, $txt, $headers);

  header("Location: index.html?MessageSent");


}
  
?>
