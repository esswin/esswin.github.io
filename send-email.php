<?php 
//print_r($_POST); exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Refresh" content="0; url=index.html">
<title>Thank You</title>
<script>
function myFunction() {
    alert("Thank you for contacting with us. One of our representative will contact you as soon as possible.");
}
</script>
</head>

<body onload="myFunction()">
<?php
$name=$_REQUEST["name"];
$company=$_REQUEST["company"];
$phone=$_REQUEST["phone"];
$email=$_REQUEST["email"];
$subject=$_REQUEST["subject"];
$comment=$_REQUEST["comment"];


$subject = "Query From the Client From :- esswin.com ";
$message = "Mail from the Client with given Details - \r\n\r\n";
$message .= "Name : ". $name."\r\n";
$company .= "Company Name : ". $company."\r\n";
$phone .= "Phone Number : ". $phone."\r\n";
$message .= "Email : " . $email."\r\n";
$message .= "Subject : " . $subject."\r\n";
$message .= "Message : "   . $comment."\r\n";
$to = "info@esswin.com ";//$_POST['to'];
$from = $email;//$_POST['from'];

$headers = "From: $from\r\nReply-to: $email";
 $send = mail($to, $subject, $message,$headers);
echo "Redirecting...";
?>
</body>
</html>