<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname ="restaurant";
$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    echo "not connected";
}

$firstName = $_POST['firstName'];

$lastName = $_POST['lastName'];

$phoneNumber = $_POST['phoneNumber'];

$email = $_POST['email'];

$date = $_POST['date'];

$time = $_POST['time'];

$Guests = $_POST['Guests'];

$Special = $_POST['Special'];


$sql = "INSERT INTO `reservation`(`firstName`, `lastName`, `phoneNumber`, `email`, `date`, `time`, `Guests`, `Special`)
 VALUES ('$firstName','$lastName','$phoneNumber','$email','$date','$time','$Guests','$Special')";

 $result = mysqli_query($con ,$sql);

 if($result){
    echo "<p>Data submitted successfully! Go back to <a href='http://localhost/restaurant/index.html'>Form</a></p>";
 }
 else{
    echo"faild";
 }

?>
