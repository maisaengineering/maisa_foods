<?php
ob_start();


session_start();
if(isset($_POST['submit_x']))
{
	//spam_code
	$url=$_SERVER['HTTP_REFERER'];

 $arr=parse_url($url);

 $page_name=$arr['path'];
  $urlnew=$arr['host'].$page_name;
  $key1=$_SESSION['spam_code'];
  foreach($_POST as $key=>$val)  $$key=(get_magic_quotes_gpc())?$val:addslashes($val);
	// $number = $_POST['spam_code'];
//	  if(($number!=$key1) || ($number == ''))
//	  {
//		header("Location: ".$page_name."?msg=invalid");exit;
//	  }
//	  else
//	  { 
	 
    $to = "pradeep.benjaram@gmail.com";
    //$to = "naveen.maisasolutions@gmail.com";
	
	$subject = "Maisa Foods Order Details";
	
	
	if (sizeof($_POST['procedure'])>0 ) $procedure=implode(",",$_POST['procedure']);
	
	$message = "Name  : $name\n\nPhone : $phone\n\nItems : $items\n\nDelivery Address : $delivery_address";
	$from = "$email";
	
	$headers = "From: $from" . "\r\n" . "BCC:$bcc";
		$ok =mail($to,$subject,$message,$headers);
	
	if($ok)
	{
		
	header("Location: thankyou.php");
}
else
{
echo "<script>alert('Server Problem! Please try again!');window.location='index.php';</script>";
}

}//else
//}//if(isset($_REQUEST['Submit']))
// exit;
?>