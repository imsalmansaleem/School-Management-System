<?php

$id=$_GET['id'];
$cid=$_GET['cid'];

$con = mysqli_connect('localhost','root','','schoolmanagement');

$sql = "Select * from teacher_courses where teacher_id ='$id' AND course_id = '$cid'";

$result = mysqli_query($con,$sql);

                while($row = $result->fetch_assoc())
                   {
                    $sql1="Delete from student_courses where teacher_course_id = ".$row['teacher_course_id'];
                    $sql10="Delete from attendance where teacher_course_id = ".$row['teacher_course_id'];
                    $sql101="Delete from results where teacher_course_id = ".$row['teacher_course_id'];
                    $res1=mysqli_query($con,$sql1);
                    $res2=mysqli_query($con,$sql10);
                    $res3=mysqli_query($con,$sql101);
                   }
$sql2="Delete from teacher_courses where teacher_id = '$id' AND course_id = '$cid'";
$re = mysqli_query($con,$sql2);
if($re)
{
	header("location:teachers.php");
}
if($res1)
{
	echo "Delete from student courses";
}
if($res2)
{
	echo "Delete from attendance";
}
if($res3)
{
	echo "Delete from resuts";
}