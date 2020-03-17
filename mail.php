<?php
$name = $_POST["name"];
$message = $_POST["message"];
$email = $_POST["email"];


if(mail("diamondkudzai70@gmail.com", "About ZIMNET", $message, "From:$email\r\n")) {
	echo "<div style='font-family:Courier;'>$name your message was sent succefully <a href='index.html'>back to ZIMNET</a></div>";
   mail($email, "ZIMNET automatic reply", "Hello this is ZIMNET.We received your email.Please kindly wait for your reply which is coming as soon as possible.", "From:diamondkudzai70@gmail.com\r\n");

} else {
	echo "<div style='font-family:Courier;'>sorry $name your message failed to sent <a href='index.html#/social'>try social media or call us</a></div>";
}

?>
