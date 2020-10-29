<?php
include "dbConn.php"; // Using database connection file here

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = mysqli_query($db,"INSERT INTO `Users`(`email`, `username`, `password`) VALUES ('$email','$username','$password')");

    if(!$user)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>
