<?php
/*
    $to = "mail@to.me"; // this is your Email address
    $from = $_POST['noreply@ven.com']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];
    $source = $_POST['source'];
    $message = $_POST['message'];
    $messagefinal = "Email: " . $email . "\n\n" . "Location: " . $_POST['location'] . "\n\n" . "I heard about you from: " . $_POST['source'] . "\n\n" . $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $messagefinal2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $email;
    $headers2 = "To:" . $to;
    mail($to,$subject,$messagefinal,$headers);
    mail($email,$subject2,$messagefinal2,$headers2); // sends a copy of the message to the sender


    header('Location: ./thank_you.html');


    header("location: http://codabool.com/projects/1/thank_you.html");
*/
header("location: http://codabool.com/projects");
exit();
?>
