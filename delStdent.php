<?php

$conn = mysqli_connect('localhost', 'root', '', 'schooldata');
$_POST = json_decode(file_get_contents('php://input'), true);
$id = $_POST['id'];
$query = "DELETE FROM studentsname WHERE id = $id";
$del_student = mysqli_query($conn,$query);
 echo json_encode($del_student);


?>