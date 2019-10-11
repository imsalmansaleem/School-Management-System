<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','schoolmanagement');
$sql = "Delete from student_courses where student_id = '$id'";
$res = mysqli_query($con,$sql);
$sql = "Delete from results where student_id = '$id'";
$res = mysqli_query($con,$sql);
$sql = "Delete from attendance where student_id = '$id'";
$res = mysqli_query($con,$sql);
$sql = "Delete from student where student_id = '$id'";
$res = mysqli_query($con,$sql);
if($res)
{
	header("location : students.php");
}

?>