<?php

require_once("config.php");

$trg_user = $_GET['user'];
if (!$trg_user) {
   echo "alert('cannot share. no user provided.');";
   exit(1);   
}

$url = $_GET['url'];
if (!$url) {
   echo "alert('cannot share. no url provided.');";
   exit(1);   
}

$title = $_GET['title'];
if (!$title) {
   echo "alert('cannot share. no title.');";
   exit(1);   
}

$user_email = $users[$trg_user];
if (!$user_email) {
   echo "alert('cannot share! Unknown user $trg_user.');";
   exit(1);
}

$subject = "Share: $title";
$body = "$trg_user,\nCheck this out: $url";
$headers = "From: share-robot@thosedamnbooks.com\r\n" .
     "X-Mailer: php";

if (mail($user_email, $subject, $body, $headers)) {
   echo("alert('sent');");
} else {
   echo("alert('Message delivery failed...');");
}



?>