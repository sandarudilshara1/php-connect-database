<?php 
     include_once 'dbc.php'; ?>

$id = $_POST['id'];
$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$email = $_POST['email'];
$pass = $_POST['password'];


     $sql = "INSEART INTO users (id,firstName,lastName,email,password) VALUES ('$id','$fName','$lName','$email','$pass'
     );";

     $result = mysqli_query($connect,$sql);

     header("Location:check2.php?signup=success");

     