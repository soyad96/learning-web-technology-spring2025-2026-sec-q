<?php
$dob="";
$msg="";
if(isset($_POST["submit"])){
    $dob=$_POST["dob"];
    if($dob== ""){
        $msg="dob is empty";
    }
    else {
        $msg="dob".$dob;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DOB</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>DOB</legend>
            DOB : <input type="date" name="dob" value="<?php echo $msg;?>">
            <input type="submit" name="submit" value="Submit">
        </fieldset>

    </form>
    <?php echo $msg ?>
    
</body>
</html>
