<?php
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'iete.rait.2016@gmail.com';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

if(mail($to, $subject, $message)) {
    $message = "Email send succefully. We will get back to you as soon as possible";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>setTimeout(function () {window.location.href = 'contact.php'; },100);</script>";
} else {
    $message = "Something went wrong. Please try agan later";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>setTimeout(function () {window.location.href = 'contact.php'; },100);</script>";
}

die;