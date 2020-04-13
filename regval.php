<?php

//session_start();

echo "Welcome ". $_POST['username']. "<br />";
//echo "Your account has been successfully created "<br />";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];

$connect=mysqli_connect("localhost","root","","mysql");

if(!$connect){
    echo "Not connected to database";
}
else{
    
    mysqli_query($link,"INSERT INTO customers (firstname,lastname,email,address,password) VALUES ('".$firstname."','".$lastname."','".$username."','".$email."','".$address."','".$password."')") or die(mysqli_error($connect));
       //header('location:login.php?signup=successful');
}



?>