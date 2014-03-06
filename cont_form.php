<?php
require_once 'google/appengine/api/mail/Message.php';

use google\appengine\api\mail\Message;

// ...
$name = $_POST['name'];
$phone = $_POST['phone'];
$products = implode(' | ', $_POST['product_group_1']);
$quantity = implode(' | ', $_POST['quantity_group_1']);
$price = implode(' | ', $_POST['price_group_1']);
$delivery_address = $_POST['delivery_address'];
$total = $_POST['totalprice'];
$email = $_POST['email'];

$message = " Name  : $name\n\n Phone Number : $phone\n\n Product Name : $products\n\n Quantity : $quantity \n\n Price : $price\n\nTotal Price : $total\n\nEmail : $email\n\nAddress : $delivery_address";

$mail_options = [
    "sender" => "chandan.benjaram@gmail.com",
    "to" => "contact@maisafoods.com",
    "subject" => "Order Form",
    "textBody" => $message
];

    
    try {
    $message = new Message($mail_options);
    $message->send();
    header("Location: thankyou.php");
} catch (InvalidArgumentException $e) {

}
?>