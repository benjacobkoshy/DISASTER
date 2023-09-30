<?php
 $server_name = "localhost";
 $user_name = "root";
 $pass = "";
 $database_name = "disaster guardian";
 
 $conn = mysqli_connect($server_name, $user_name, $pass, $database_name);
   if(!$conn){
     die("Connection failed " .mysqli_connect_error());
   }

   if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql_query = "SELECT * FROM sign_up WHERE email='$email' AND password='$password'";
      $result = mysqli_query($conn,$sql_query);
      $count = mysqli_num_rows($result);
      if($count>0){
             echo '<script type="text/javascript">alert("Login successful");</script>';
             header("Location:contactAccess.html");
      }else{
        echo '<script type="text/javascript">alert("Invalid credential");</script>';
      }
      mysqli_close($conn);
   }
?>





<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.login-container {
    width: 500px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px #ccc;
    text-align: center;
    
}

h2 {
    color: #333;
}

label {
    display: block;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 60%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}
.forgotpass a{
    text-decoration: none;
   padding: 10px 5px ;
   margin-top: 10px;
}
marquee{
    margin-top: 20px
}


    </style>
</head>
<body>
    <h1>DISASTER GUARDIAN</h1>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <input type="submit" value="Login" name="login">
        </form>
        <div class="forgotpass" id="forgot">
           <a href="signup.php">Signup</a>&nbsp;
           <a href="forgotPass.html">Forgot password?</a>
        </div>
    </div>
    <marquee behavior="" direction="left">Welcome back to DISASTER GUARDIAN</marquee>
</body>
</html>
