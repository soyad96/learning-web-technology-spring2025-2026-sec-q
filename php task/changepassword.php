<?php

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
 </head>
 <body>
    <form action="changepassword.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>CHANGE PASSWORD></legend>
            Currrent Password  : <input type="password" name="currentpas" value=""><br>
            New Password  : <input type="password" name="newpass" value=""><br>
            ReType New Passord : <input type="passowrd" name="rpass" value="" ><br>

            <input type="submit" name="submit" value="Submit">


        </fieldset>

    </form>

    
 </body>
 </html>