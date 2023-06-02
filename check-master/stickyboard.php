<?php
    session_start();

 $conn = new mysqli('localhost', 'root', '', 'home');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
 
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM form WHERE email = '$email'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();


      
    $conn->close();
 }
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/note-board.css">
    <title>Document</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  
  </head>
<body>

    <?php
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'home');
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        // Retrieve the user's notes
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM notes WHERE email = '$email'";
        $result = $conn->query($sql);
    
    
    
    
         // Display each note on the page
        while ($row = $result->fetch_assoc()) {
    
             print ' <div class="container bootstrap snippets bootdeys"> <div class="row"> <div class="col-md-4 col-sm-6 content-card"> <div class="card-big-shadow"> <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none"> <button class="button" id="colorButton"><img src="icons8-color-30.png" alt=""></button> <div class="content"> <p class="description">'. $row['content'] .' </p> </div>'. $row['date'] .'  </div> <!-- end card --> </div> </div> </div> </div>';
        
      }}
    ?>  



  
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          var card = document.querySelector(".card[data-background='color']");
          var colorButton = document.getElementById("colorButton");
          var colors = ["blue", "green", "yellow", "brown", "purple", "orange"];
      
          // Check if a color is stored in local storage
          var selectedColor = localStorage.getItem("selectedColor");
      
          if (!selectedColor) {
            selectedColor = "blue"; // Set the initial color to blue if no color is stored
            localStorage.setItem("selectedColor", selectedColor);
          }
      
          card.setAttribute("data-color", selectedColor);
      
          colorButton.addEventListener("click", function() {
            var currentColor = card.getAttribute("data-color");
            var currentIndex = colors.indexOf(currentColor);
            var nextIndex = (currentIndex + 1) % colors.length;
            var nextColor = colors[nextIndex];
            card.setAttribute("data-color", nextColor);
            localStorage.setItem("selectedColor", nextColor);
          });
        });
      </script>
</body>
</html>