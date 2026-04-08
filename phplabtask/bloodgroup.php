<?php
$blood = "";
$msg = "";

if(isset($_POST["submit"])){
    $blood = $_POST["blood"];

    if($blood == ""){
        $msg = "Select blood group";
    } else {
        $msg = "Blood Group: " . $blood;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blood Group</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Blood Group</legend>

            <select name="blood">
                <option value="">Select</option>
                <option value="A+" <?php if($blood=="A+") echo "selected"; ?>>A+</option>
                <option value="B+" <?php if($blood=="B+") echo "selected"; ?>>B+</option>
                <option value="O+" <?php if($blood=="O+") echo "selected"; ?>>O+</option>
            </select>
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php echo $msg; ?>
</body>
</html>