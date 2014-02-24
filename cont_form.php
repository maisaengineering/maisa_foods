<?php
require_once 'google/appengine/api/mail/Message.php';

use google\appengine\api\mail\Message;


$message = "Name  : $name\n\nPhone : $phone\n\nItems : $items\n\nDelivery Address : $delivery_address";

	$mail_options = [
    "sender" => "snk.navin143@gmail.com",
    "to" => "naveen.maisasolutions@gmail.com",
    "subject" => "Enquire Form",
    "textBody" => $message
];

	
	try {
    $message = new Message($mail_options);
    $message->send();
    header("Location: thankyou.php");
} catch (InvalidArgumentException $e) {

}
?>