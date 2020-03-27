<?php
include 'db_connnection.php';
$conn = OpenCon();

$E_mail = $_POST['E_mail']??'';
$Password = $_POST['Password']??'';
$sql="SELECT E_mail,Password FROM accounts";
$rez=mysqli_query($conn,$sql);

$bool=0;
while($data = mysqli_fetch_assoc($rez)){
	if ($E_mail==$data["E_mail"] && $Password==$data["Password"])
		$bool=1;
}
if ( $bool==1)
	header("location:acc_main.html");
else
	header("location:main.html");
CloseCon($conn);
?>