<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Sanitize the note content
$content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
$boardId = filter_var($_POST['boardId'], FILTER_SANITIZE_NUMBER_INT);
$noteId = filter_var($_POST['noteId'], FILTER_SANITIZE_NUMBER_INT);


// Database connection
$conn = new mysqli('localhost','root','','home');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    if($boardId == null)
    {
            // Insert the note into the database
    $stmt = $conn->prepare("INSERT INTO notes (content, date, email,noteId) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $content, $date, $_SESSION['email'],$noteId);

    $date = date('Y-m-d H:i:s'); // Get the current date and time

    $execval = $stmt->execute();

    if($execval) {
        echo "Note saved successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    }
    else{
     // Insert the note into the database
    $stmt = $conn->prepare("INSERT INTO notesboard (content, date, email,boardID) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $content, $date, $_SESSION['email'],$boardId);

    $date = date('Y-m-d H:i:s'); // Get the current date and time

    $execval = $stmt->execute();

    if($execval) {
        echo "Note saved successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    }

}
