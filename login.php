<html>

<head>
  <title>Student Registration</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/registration.js"></script>
  <style>
    input[type=text],
    input[type=password],
    input[type=date],
    select {
      width: 100%;
      padding: 15px;
      margin: 4px 0 15px;
      border: none;
      background-color: #f1f1f1;
      opacity: 0.9;
      outline: none;
      font-family: sans-serif;
    }

    .signupbtn {

      width: 50%;
      background-color: #04AA6D;
      color: white;
      padding: 15px;
      margin: 18px 0;
      border: none;
      width: 100%;
      opacity: 0.9;
      font-size: 13px;
    }

    button:hover {
      opacity: 1;
    }

    .form {
      margin-top: 100px;
      margin-left: 410px;
      margin-right: 410px;

    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }
  </style>
</head>

<body>
  <div class="form">
    <form action="#" method="post">
      <h1> Login Form</h1>
      <hr>
      <label for="Email"><b>Email</b></label>
      <input id="login_email" type="text" placeholder="Enter Email" name="Age" maxlength="20">

      <label for="password"><b>password</b></label>
      <input id="login_password" type="password" placeholder="Enter password" name="password" maxlength="10">
      <button id="login" type="button" class="signupbtn" >Login</button>
      <a href="reset_password.php">Reset Password</a>

  </div>

  </form>
</body>