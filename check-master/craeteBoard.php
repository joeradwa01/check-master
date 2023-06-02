<?php

$conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$email = $_POST["email"];
$title = $_POST["title"];
$description = $_POST["description"];

$query = "INSERT INTO board(BoardName,Description,email) VALUES(?,?,?);";
$stmt =  $conn->prepare($query);
$stmt->bind_param("sss",$title,$description,$email);
$execval = $stmt->execute();


$stmt->close();
		$conn->close();
        header("Location: project-board.php ");
 
 ?>





