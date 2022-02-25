<html>
<head>
  <title>Student Registration</title>
  <style>


  input[type=text], input[type=password] ,input[type=date],select {
    width: 100%;
    padding: 15px;
    margin: 4px 0 15px ;
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
  opacity:1;
}
.form{
  margin-top: 70px;
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
    <form action="DbConnection.php" method="post">
      <h1> Student Sign IN</h1>

     <p class="p">Please fill in this form to create an account.</p>
       <hr>
       <label for="Name"><b>Name</b></label>
       <input type="text" placeholder="Enter Name" name="Name"  maxlength="3">
<label for="Email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="Age"  maxlength="3">

<label for="password"><b>password</b></label>
<input type="text" placeholder="Enter password" name="password" maxlength="10">
<button type="submit" class="signupbtn">Sign In</button>

</div>

      </form>
</body>
