 <?php

$sid=$_POST['id'];
$teacher_course_id=$_POST['course'];
$grade=$_POST['grade'];

$con = mysqli_connect('localhost','root','','schoolmanagement');

$sql = "INSERT into results(student_id,teacher_course_id,grade)VALUES('$sid','$teacher_course_id','$grade');";

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