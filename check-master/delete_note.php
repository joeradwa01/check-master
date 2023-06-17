<?php
// Retrieve the note ID from the AJAX request
$noteId = 2147483647;

// TODO: Perform necessary validation and authentication checks

// Connect to your database (replace 'hostname', 'username', 'password', and 'database' with your own details)
$conn = new mysqli('localhost','root','','home');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to delete the note from the database
$stmt = $conn->prepare("DELETE FROM notes WHERE id = ?");
$stmt->bind_param("s", $noteId);
$stmt->execute();

// Check if the deletion was successful
if ($stmt->affected_rows > 0) {
    echo "Note deleted successfully";
} else {
    echo "Error deleting note";
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>