<?php 
if(isset($_POST['submit'])){
    $to = "fake@mail.com"; // this is your Email address
    $from = $_POST['noreply@ven.com']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $location = $_POST['location'];
	$source = $_POST['source'];
	$message = $_POST['message'];
    $messagefinal = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $messagefinal2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 

<form action="/action_page.php" method="post">
  <input type="text" name="name" placeholder="Your Name" size="50">
  <br>  <br>
  <input type="text" name="email" placeholder="Your Email" size="50">
  <br><br>
  <input type="text" name="subject" placeholder="I Want Information About..." size="50">
  <br><br>
  <input type="text" name="location" placeholder="Your Location" size="50">
  <br><br>
  <input type="text" name="source" placeholder="How Did You Find Us?" size="50">
  <br><br>
<textarea placeholder="Message" name="message" style="width: 305px;height: 70px;padding: 10px;resize: none;"></textarea>
  <br><br>
<input type="submit" name="submit" value="Submit">
</form>