<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_managment_system";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['getBatchData'])) {

        $courseId = $_POST['course_id'];
        $batchsql  = "SELECT b.batch_id,b.batch_year,bc.course_id FROM batch b 
                 INNER JOIN batch_cource bc  on bc.batch_id = b.batch_id
                 WHERE bc.course_id = $courseId";

        $batchResult = mysqli_query($conn, $batchsql);
        if (mysqli_num_rows($batchResult) > 0) {
            echo "<option value='-1'>Select your batch</option>";
            while ($row = mysqli_fetch_assoc($batchResult)) {
                $year =  $row['batch_year'];
                $batch_id =  $row['batch_id'];
                echo "<option value='$batch_id'>$year</option>";
            }
        }
    } elseif (isset($_POST['signup'])) {

        $name = $_POST['key_stu_name'];
        $age = $_POST['age'];
        $Rollno = $_POST['rollno'];
        $dob = $_POST['dob'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $confirm_password =$_POST['confirm_password'];

        $query = "Insert into student (stu_name,stu_age,stu_rollno,stu_password,stu_dob,
        stu_email,batch_id,course_id) values ('$name', $age, $Rollno, '$password', '$dob','$email',
        $batch,$course)";


        if (mysqli_query($conn, $query)) {
            echo ("Student registered");
        } else {
            echo ("Registration failed try again after some time");
        }
    } elseif (isset($_POST['login'])) {
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        $query = "select * from student where stu_password = 
     '$password' and stu_email =  '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo ("you are login successfully");
        } else {
            echo ("student does not exist");
        }
    } 
    
    else if (isset($_POST['reset'])) {
        $email = $_POST['key_email'];
        $password = $_POST['key_password'];
        // print_r($_POST);

        $query = "update student set stu_password=
         '$password' where stu_email= '$email'";
        mysqli_query($conn, $query);
        if(mysqli_affected_rows($conn) >0){
            echo " password updated successfuly";
        }  
         else {
            echo "your email address does not exist";
        }
    }
}
