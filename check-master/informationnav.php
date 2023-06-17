<!doctype html>




<html lang="en">




<?php

//session_start();

$conn = new mysqli('localhost', 'root', '', 'home');

if ($conn->connect_error) {

    die('Connection failed: ' . $conn->connect_error);

}




$email = $_SESSION['email'];

$sql = "SELECT * FROM board WHERE email = '$email'";

$result = $conn->query($sql);





$sql2 = "SELECT * FROM form WHERE email = '$email'";

$result2 = $conn->query($sql2);

$row = $result2->fetch_assoc();  

$conn->close();




if(!isset($_GET["error"]))

{

    $error = " ";

}

else{

    $error = $_GET["error"];

}

?>




<head>




<style>




body {




  font-family: Arial;

  padding-left:60em;

  top:8em;




}







input:read-only[type=text]{




  width: 90%;

  padding: 12px 20px;

  margin: 8px 0;

  display: block;

  border: 1px solid #ccc;

  border-radius: 4px;

  box-sizing:50%;




}




div.board{




  border-radius: 5px;

  background-color: #f2f2f2;

  padding: 20px;

  height: 220px;  

  border: 5px solid;

 

  position: absolute;

    right: 0;

}




</style></head>




<body>




<?php

foreach($result as $b):

?>






<div class="board">

  <form>

    <label for="fname">Board Name</label>

    <input readonly value="<?php  echo $b['BoardName']; ?>" type="text" id="bname" >

    <label for="lname">Board ID</label>

    <input readonly value="<?php echo $b['id']; ?>" type="text" id="bid" >

    <label for="country">Board Creator</label>

    <input readonly value="<?php  echo $b['email']; ?>" type="text" id="bcreator" >

  </form>

</div>

<?php endforeach; ?>

</body>




</html>