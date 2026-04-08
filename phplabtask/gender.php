<?php
$gender = "";
$msg = "";

if(isset($_POST["submit"])){
    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
        $msg = "Gender: " . $gender;
    } else {
        $msg = "Select gender";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gender</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Gender</legend>

            <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
            <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>> Other
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php echo $msg; ?>
</body>
</html>