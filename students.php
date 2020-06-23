<?php

$conn = mysqli_connect('localhost', 'root', '', 'schooldata');
$query = "SELECT * from studentsname";
$allquery = mysqli_query($conn, $query);

echo json_encode(mysqli_fetch_all($allquery, MYSQLI_ASSOC));
// $children = file_get_contents('php://input');
// echo $children;
// $students = ["Joseph", "Tunde", "Dayo", "Isaac", "Falsetto", "Mathew", "charles","Peter"];
// echo json_encode($students);

?>