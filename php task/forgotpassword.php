<?php
session_start();
if(isset($_REQUEST['sunmit'])){
    header('location:changepassword.php');
    exit;
}
else {
    header('location:login.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password </title>
</head>
<body>
    <form action="forgotpassword.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>FORGOT PASSWORD</legend>
            Enter email : <input type="email" name="email" value=""><br>
            <input type="submit" name="submit" value="Submit">
    
        </fieldset>

    </form>
    
</body>
</html>
