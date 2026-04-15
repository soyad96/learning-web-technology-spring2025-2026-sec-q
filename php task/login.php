<?php
session_start();
if(isset($_REQUEST['submit'])){
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    if($username== "" || $password== ""){
        echo "the username / password is empty please fill it ";
    }
    else {
        if($usename==$password){
            header('location: loogeddashboard.php');
            exit;
        }
        else {
            echo "invalid user";
        }
    }
    
}
else {
        header('location: login.php');
        exit;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="login.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Login</legend>
            UserName : <input type="text" name="username" value=""><br>
            Password : <input type="password" name="password" value=""><br>
            <input type="radio" name="rember me" value="Remember me "> <br>
            <input type="submit" name="submit" value="Submit">
            <a href="forgotpassword.php">Forgot Password</a>
        </fieldset>



    </form>
    
</body>
</html>