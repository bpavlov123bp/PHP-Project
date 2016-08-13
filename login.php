<?php
session_unset();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
    </head>
    <body>
    <?php include "header.php"; ?>
        <form method="post" action="movie1.php">
            <table border="0">
                <tr>
                    <td>Enter your username:</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td>Enter yoyr password:</td>
                    <td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
