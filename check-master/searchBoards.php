<?php
$conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {

    $boardId = $_POST['id'];
    $sql = "SELECT * FROM notesboard WHERE boardID = '$boardId' ";
    
    $result = $conn->query($sql);
    $rowcount=mysqli_num_rows($result);

    if($rowcount == 0)
    {
        header("Location: project-board.php?error=WrongBoardId");
        die;

    }
    else{
        header("Location: noteBoard.php?id=$boardId");
        die;
    }
}