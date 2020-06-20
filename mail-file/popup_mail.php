<?php
$Firstname=$_POST['Firstname-popup'];
$Email=$_POST['Email-popup'];
$Phone=$_POST['Phone-popup'];
$Description=$_POST['Description-popup'];
$product=$_POST['Product-popup'];
$to = "nirmal.dsv@gmail.com";
$subject = "Shri Padmnabham Enquiry";  

$message = "
<html>
<head>
<title>Shri Padmnabham Enquiry</title>
</head>
<body>
<p>Appointment User Contact Information</p>
<table>
<tr>
<td>Name: </td>
<td>".$Firstname."</td>
</tr>

<tr>
<td>Email Address: </td>
<td>".$Email."</td>
</tr>

<tr>
<td>Phone Number: </td>
<td>".$Phone."</td>
</tr>

<tr>
<td>Description: </td>
<td>".$Description."</td>
</tr>
<tr>


</table>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <nirmal.dsv@gmail.com >' . "\r\n";
$mail=mail($to,$subject,$message,$headers);
if($mail)
{
   echo 'Thanks for connecting us we will contact you shortly';
}
else
{  
  echo 'Email Not Sent Please Try Again';
}

?>