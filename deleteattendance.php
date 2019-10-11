<?php

$sid = $_GET['sid'];
$tid = $_GET['tid'];
$date = $_GET['date'];

$con = mysqli_connect('localhost','root','','schoolmanagement');

$sql = "DELETE FROM attendance WHERE student_id = '$sid' AND teacher_course_id = '$tid' AND date = '$date';";

$result = mysqli_query($con,$sql);

if($result)
{
    header("location:students.php");
}
else
{
    echo "data not entered";
}

?>

