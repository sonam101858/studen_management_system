<?php

$courseSql = "SELECT * FROM course";
$batchSql = "SELECT * FROM batch";
$courseResult = mysqli_query($conn, $courseSql);
$batchResult = mysqli_query($conn, $batchSql);
$name_error = "";
$age_error = "";
$roll_no_error = "";
$dob_error = "";
$email_error = "";
$password_error = "";
$confirm_password_error= "";
$course_error= "";
$batch_error= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
  $name =  $_POST['name'];
  $age =  $_POST['age']; 
  $roll_no =  $_POST['rollno']; 
  $dob =  $_POST['dob']; 
  $email =  $_POST['email']; 
  $password =  $_POST['password']; 
  $confirm_password =  $_POST['confirm_password']; 
 $course =  $_POST['course_id']; 
 $batch =  $_POST['batch_id']; 


  if (empty($name)) {
    $name_error = "Name is mandatory";
  }
  if (empty($age)) {
    $age_error = "Age is mandatory";
  }
  if (empty($roll_no)) {
    $roll_no_error = "Rollno is mandatory";
  }
  if (empty($dob)) {
    $dob_error = "Date of birth is mandatory";
  }
  if (empty($email)) {
    $email_error = "Email is mandatory";
  }
  if (empty($password)) {
    $password_error = "Password is mandatory";
  }
  if (empty($confirm_password)) {
    $confirm_password_error = "Confirm password is mandatory";
  }
  if ($course==-1) {
    $course_error = "Course is mandatory";
  }
  if ($batch==-1) {
    $batch_error = "Batch is mandatory";
  }


  print_r($_POST);

}

?>
<html>

<head>
  <title></title>
  <style>
    input[type=text],
    input[type=password],
    input[type=date],
    select {
      width: 100%;
      padding: 14px;
      margin: 2px 0 10px;
      border: none;
      background-color: #f1f1f1;
      opacity: 0.9;
      outline: none;
      font-family: sans-serif;
    }

    .p {
      margin-bottom: 20px;
    }
    .error {
      color: red;
      font-weight: bold;
    }


    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .signupbtn {

      width: 50%;
      background-color: #04AA6D;
      color: white;
      padding: 14px;
      margin: 8px 0;
      border: none;
      width: 100%;
      opacity: 0.9;
      font-size: 13px;
    }

    button:hover {
      opacity: 1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #dddd;
      outline: none;
    }

    .top {

      margin-left: 350px;
      margin-right: 350px;
    }
  </style>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/registration.js"></script>
</head>

<body>


  <div class="form">
    <form class="top" action="#" method="post">

      <h1>Sign Up</h1>

      <p class="p">Please fill in this form to create an account.</p>
      <hr>
      
      <label for="Name"><b>Name</b></label>
      <input id="name"  type="text" placeholder="Enter Name" name="name" maxlength="50" pattern="[a-z]{4,8}">
      <span class="error"><?php echo $name_error; ?></span><br><br></span>

      <label for="Age"><b>Age</b></label>
      <input id="age" type="text" placeholder="Enter Age" name="age" maxlength="3">
      <span class="error"><?php echo $age_error; ?></span><br><br></span>

      <label for="RollNo"><b>RollNo</b></label>
      <input id="Rollno" type="text" placeholder="Enter RollNo" name="rollno" maxlength="10">
      <span class="error"><?php echo $roll_no_error; ?></span><br><br></span>


      <label for="Dob"><b>Date of birth</b></label>
      <input id="dob" type="date" placeholder="Enter Date of birth" name="dob">
      <span class="error"><?php  echo $dob_error;  ?></span><br><br></span>



      <label for="course"><b>Course</b></label>
      <select id="course" name="course_id">

      <option value="-1">Select your course</option>

        <?php
        if (isset($courseResult)) {

          if (mysqli_num_rows($courseResult) > 0) {
            while ($row = mysqli_fetch_assoc($courseResult)) { ?>
              <option value="<?php echo $row['course_id'] ?>">
                <?php echo ($row['course_name']); ?>
              </option>

        <?php }
          }
        } ?>
      </select>
      <span class="error"><?php  echo $course_error;  ?></span><br><br></span>

      


      <label for="batch"><b>Batch</b></label>

      <select  id="batch" name="batch_id">
      <option value='-1'>Select your batch</option>

      </select>
      <span class="error"><?php  echo $batch_error;  ?></span><br><br></span>

      <label for="email"><b>Email</b></label>
      <input id="email" type="text" placeholder="Enter email" name="email" maxlength="20">
      <span class="error"><?php  echo $email_error;  ?></span><br><br></span>



      <label for="password"><b>Password</b></label>
      <input id="password" type="password" placeholder="Enter Password" name="password" maxlength="15">
      <span class="error"><?php  echo $password_error;  ?></span><br><br></span>

      <label for="Repeat password"><b>Confirm Password</b></label>
      <input id="confirm_password" type="password" placeholder="Confirm Password" name="confirm_password" maxlength="15">
      <span class="error"><?php  echo $confirm_password_error;  ?></span><br><br></span>

      <button  id="signUp" type="button" class="signupbtn">Sign Up</button>
    </form>
  </div>
</body>
</html>