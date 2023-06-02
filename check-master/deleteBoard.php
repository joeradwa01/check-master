<?php

$boardid = $_GET["boardid"];

$conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$sql = "DELETE FROM notesboard WHERE boardID = $boardid;";
$result = $conn->query($sql);

header("Location: project-board.php ");
