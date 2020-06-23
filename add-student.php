<?php
$conn = mysqli_connect('localhost', 'root', '', 'schooldata');
$_POST = json_decode(file_get_contents('php://input'), true);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$insert = "INSERT INTO studentsname ( `first_name`, `last_name`, `e_mail`, `phone_no`) VALUES ('$fname','$lname','$email','$phone')";
 $myinsert = mysqli_query($conn, $insert);

 $response;
 $response['success'] = "true"; 
 echo json_encode($response);

?>