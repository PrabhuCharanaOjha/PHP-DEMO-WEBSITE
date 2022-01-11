<?php
  $to = "Prabhu.ojha.1997@gmail.com";
  $subject = "test mail";
  $message = "hellow ...this is a simple email message.";

  // $from = "user@gamil.com"; //(for single user)
  // $header = "From: $from";

  $header = [
    "MIME-Version: 1.0",
    "Content-type: text/plain; charset=utf-8",
    "From: user@gmail.com",
    "Cc: user2@gmail.com"
  ];
  $header = implode("\r\n", $header); //it conver array to indivisual string

  mail($to, $subject, $message, $header);

  echo "message send";
?>