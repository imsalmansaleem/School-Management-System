<?php
$id = $_GET['id'];
$tcid = $_GET['tcid'];

$con = mysqli_connect('localhost','root','','schoolmanagement');

$sql = "Delete from results where teacher_course_id ='$tcid' AND student_id = '$id'";

$res = mysqli_query($con,$sql);

if($res)
{
	header("location : students.php");
}

?>