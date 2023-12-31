<?php 

$con = mysqli_connect('localhost','root');

if($con)
{
	echo "Connecton Successful";
}

else{
	echo "No Connection";
}

mysqli_select_db($con,'hasan');

$user = $_POST['user'];
$email =$_POST['email'];
$mobile=$_POST['mobile'];
$data=$_POST['data'];


$query="insert into contactinfo(user,email,mobile,data)
values('$user','$email','$mobile','$data')";

echo "$query";

mysqli_query($con,$query);

header('location:Mahdi.php');

 ?>