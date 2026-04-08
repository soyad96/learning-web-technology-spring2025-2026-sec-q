<?php
$email = "";
$msg = "";

if(isset($_POST["submit"])){
    $email = $_POST["email"];

    if($email == ""){
        $msg = "Email is empty";
    } else {
        $msg = "Email: " . $email;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Email</legend>

            Email: <input type="email" name="email" value="<?php echo $email; ?>"> <br><br>

            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php echo $msg; ?>
</body>
</html>