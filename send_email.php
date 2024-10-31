<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $profession = htmlspecialchars($_POST['profession']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $subject = htmlspecialchars($_POST['subject']);
    $messageContent = htmlspecialchars($_POST['message']);

    $to = "nicolatabbah0@gmail.com"; 
    $subjectLine = "New message from $firstName $lastName - $subject";

    $message = "
    Name: $firstName $lastName\n
    Email: $email\n
    Gender: $gender\n
    Profession: $profession\n
    Birthdate: $birthdate\n\n
    Message:\n$messageContent
    ";

    $headers = "From: $email";

    if (mail($to, $subjectLine, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "There was an error sending the message.";
    }
}
?>
