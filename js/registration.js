$(document).ready(function () {
    $("#course").change(function () {
      const course_id = $(this).val();
      $.post(
        "submit.php",
        { course_id: course_id, getBatchData: "yes" },
        function (data) {
          $("#batch").html(data);
        }
      );
    });

    $("#signUp").click(function () {
      var stu_name = $("#name").val();
      var age = $("#age").val();
      var rollno = $("#Rollno").val();
      var dob = $("#dob").val();
      var course = $("#course").val();
      var batch = $("#batch").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var confirm_password = $("#confirm_password").val();

      if (stu_name == "") {
        alert("Please enter your name");
      } else if (age == "") {
        alert("Please enter your age");
      } else if (rollno == "") {
        alert("Please enter your RollNo");
      } else if (dob == "") {
        alert("Please enter your Date of birth");
      } else if (course == -1) {
        alert("Please enter your course");
      } else if (batch == -1) {
        alert("Please enter your Batch");
      } else if (email == "") {
        alert("Please enter your Email");
      } else if (password == "") {
        alert("Please enter your Password");
      } else if (confirm_password == "") {
        alert("Please enter your Confirm Password");
      } else if (password.length < 6) {
        alert("your password should not less then six character ");
      } else if (password != confirm_password) {
        alert("Password and  Confirm Password does not match");
      } else {
        $.post(
          "submit.php",
          {
            key_stu_name: stu_name,
            age: age,
            rollno: rollno,
            dob: dob,
            course: course,
            batch: batch,
            email: email,
            password: password,
            // confirm_password: confirm_password,
            signup: "student_registered",
          },
          function (data) {
            alert(data);
          }
        );
      }
    });

    $("#login").click(function () {
      var email = $("#login_email").val();
      var password = $("#login_password").val();

      if (email == "") {
        alert("Please enter your email");
      } else if (password == "") {
        alert("Please enter your password");
      } else {
        $.post(
          "submit.php",
          {
            login_email: email, //key login_email
            login_password: password,
            login: "login_student",
          },
          function (data) {
            console.log(data);
            alert(data);
          }
        );
      }
    });

    $("#reset").click(function () {
      var r_email = $("#email").val();
      var r_password = $("#password").val();
      var confirm_password = $("#confirm_password").val();

      if (r_email == "") {
        alert("Please enter your email");
      } else if (r_password == "") {
        alert("Please enter your New password");
      } else if (confirm_password == "") {
        alert("Please confirm your password");
      } else if (r_password.length < 6) {
        alert("your password should not less than 6 digits");
      } else if (r_password != confirm_password) {
        alert("password and confirm password does not match");
      } else {
        $.post(
          "submit.php",
          {
            key_email: r_email,
            key_password: r_password,
            reset: "Reset_password",
          },
          function (data) {
            console.log(data);
            alert(data);
          }
        );
      }
    });
});
