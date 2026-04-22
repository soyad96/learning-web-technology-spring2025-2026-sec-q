<?php
session_start();
if(isset($_REQUEST['submit'])){
    $username=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $confrimpassword=$_REQUEST['confirmpass'];
      if($username==""|| $email==""|| $password==""){
        echo "username/password/email canot be empty";
      }
      else{
        if($username==$password){
            header('location:login.php');
        }
        else {
            header('location:registration.php');
        }
      }

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regreatation</title>
</head>
<body>
    <form action="registration.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Registration</legend>
            Name : <input type="text" name="name" value=""><br>
            Email: <input type="test" name="email" value=""><br>
            Password  : <input type="password" name="password" value=""><br>
            Confirm Password  : <input type="password" name="confirmpass" value=""><br>
        Role :
        <select name="role">
            <option value="admin">Admin</option>
            <option value="user">USer</option>
        </select>
        <br> <br>
        
        <input type="submit" name="submit" value="Register">
        <input type="reset" name="reset" value="Reset">
        </fieldset>



    </form>
    
</body>
</html>