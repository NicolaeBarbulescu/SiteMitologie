<?php
include 'db_connnection.php';
$conn = OpenCon();

$First_name = $_POST['First_name'] ??'';
$Second_name = $_POST['Second_name']??'';
$E_mail = $_POST['E_mail']??'';
$Password = $_POST['Password']??'';
 
$sql = "INSERT INTO accounts (First_name, Second_name, E_mail,Password)
VALUES ('$First_name', '$Second_name', '$E_mail','$Password')";
if (mysqli_query($conn,$sql)) {
    header("location:main.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

CloseCon($conn);


?>