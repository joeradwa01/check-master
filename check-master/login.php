<?php
 
include('connection.php');  
     
$email = $_POST['email'];  
$password = $_POST['password'];  
        
//to prevent from mysqli injection  
$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($con, $email);  
$password = mysqli_real_escape_string($con, $password);  
      
$sql = "select *from form where email = '$email' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
          
if($count == 1){ 
    session_start();
 
    $_SESSION['email'] = $email;
            
    // Redirect the user to the profile page include("index.php");

    header("Location: index.php ");
    exit();
}  
else{  
    echo "<h1> Login failed. Invalid email or password.</h1>";  
}     

 
?>