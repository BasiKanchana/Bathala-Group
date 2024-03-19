<?php
$to = 'info@bathalagroup.co.in,kdreddy582@gmail.com,bathalagroup@gmail.com';
$subject = 'REQUEST A CALL BACK';

// Message
$message = '
<html>
<head>
  <title>Bathala Group</title>
</head>
<body>
  
  <table>
    <tr>
        <td>Name: </td>
        <td>' . $_POST['name'] . '</td>
    </tr>
    <tr>
        <td>Phone: </td>
        <td>' . $_POST['mobileno'] . '</td>
    </tr>
    <tr>
        <td>Email: </td>
        <td>' . $_POST['email'] . '</td>
    </tr>
    <tr>
         <td>Plots: </td>
         <td>' . $_POST['property'] . '</td>
     </tr>
    <tr>
        <td>Message: </td>
        <td>' . $_POST['message'] . '</td>
    </tr>
  </table>
</body>
</html>
';


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: Bathala Group <info@bathalagroup.co.in>';
mail($to, $subject, $message, implode("\r\n", $headers));
?>

<h1>Successfully sent the message</h1>
