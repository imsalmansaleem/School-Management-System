<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','schoolmanagement');

$sql1="Select * from student where parent_id=".$id;
$result = mysqli_query($con,$sql1);

 while($row = $result->fetch_assoc())
                   {
                    $sql1="Delete from student_courses where student_id = ".$row['student_id'];
                    $sql10="Delete from results where student_id = ".$row['student_id'];
                    $sql101="Delete from attendance where student_id = ".$row['student_id'];
                    $res=mysqli_query($con,$sql1);
                    $res=mysqli_query($con,$sql10);
                    $res=mysqli_query($con,$sql101);
                   }

$sql="Delete from parent where parent_id = ".$id;
$res=mysqli_query($con,$sql);
if($res)
{
	header("location : students.php");
}

?>