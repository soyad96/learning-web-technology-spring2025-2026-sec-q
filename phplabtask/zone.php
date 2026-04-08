<?php
$name = "";
$message = "";

if(isset($_REQUEST["submit"])){
    $name = $_REQUEST["name"];

    if($name == ""){
        $message = "the user name is null";
    } else {
        $message = "Name (current page): " . $name;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Name Form</title>
</head>
<body>

<form action="design.php" method="post">
    <fieldset>
        <legend>Name</legend>

        
        <input type="text" name="name" value="<?php echo $name; ?>"><br><br>

        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>

<?php
if($message != ""){
    echo $message;
}
?>

</body>
</html>