<?php

session_start();


  /*if(!isset($_SESSION['username'])){
      header('location:Register.php?error');
  }*/

$username=$_SESSION['name'];
$triptype=$_POST['roundtrip'];
$Dairport=$_POST['Dairport'];
$Aairport=$_POST['Aairport'];
$Ddate=$_POST['Ddate'];
$Adate=$_POST['Adate'];
$class=$_POST['class'];




$link=mysqli_connect("localhost","root","","bolu");

if(!$link){
    echo "Not connected to database";
}
else{
    
    mysqli_query($link,"INSERT INTO flightdetails (triptype,Dairport,Aairport,Ddate,Adate,class,username) VALUES ('".$triptype."','".$Dairport."','".$Aairport."','".$Ddate."','".$Adate."','".$class."','".$username."')") or die(mysqli_error($link));
       echo "You have successfully booked a flight";
       header('location:home.php?successfullyBooked');
}



    



?>