<?php
$degrees = [];
$msg = "";

if(isset($_POST["submit"])){
    if(isset($_POST["degree"])){
        $degrees = $_POST["degree"];
        $msg = "Degrees: " . implode(", ", $degrees);
    } else {
        $msg = "Select at least one degree";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Degree</legend>

            <input type="checkbox" name="degree[]" value="SSC" <?php if(in_array("SSC",$degrees)) echo "checked"; ?>> SSC
            <input type="checkbox" name="degree[]" value="HSC" <?php if(in_array("HSC",$degrees)) echo "checked"; ?>> HSC
            <input type="checkbox" name="degree[]" value="BSc" <?php if(in_array("BSc",$degrees)) echo "checked"; ?>> BSc
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php echo $msg; ?>
</body>
</html>