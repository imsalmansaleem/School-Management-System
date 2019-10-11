<?php session_start();
$temp=0;
$username = $_POST['user'];
$password = $_POST['pass'];

$con = mysqli_connect('localhost','root','','schoolmanagement');

if(mysqli_connect_error())
{
	echo "Failed connection";
}
else
{
	echo "connection established";
}

$sql = "SELECT * from admin where email='$username' and password='$password'";

$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result))
{
	if($row['email']==$username && $row['password']==$password)
	{
		$temp=1;
		$_SESSION['auth']=$temp;
	}
}

if($temp==1)
{
	$_SESSION['username']=$username;
	header("Location: dash.php");
}
else
{
	echo "Unauthorized User";
}

?>