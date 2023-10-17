<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "bhardwajcahit@gmail.com";
    $subject = "Form Submission";
    $message = "Name: $name\nEmail: $email";
    
    mail($to, $subject, $message);
}
?>

