<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;
if(($_SESSION['username'] == 'Joe') and ($_SESSION['userpass'] == '12345'))
{
    $_SESSION['authuser'] = 1;
}
else
{
    echo "Sorry, but don't have permission to view this page, you loser!";
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Find my Favorite Movie!</title>
    </head>
    <body>
    <?php include "header.php"; ?>
    <?php
    $myfavmovie = urldecode("Life of  Brian");
    echo "<a href='moviesite.php?favmovie=$myfavmovie'>";
    echo "Click here to see information about my favorite movie!";
    echo "</a>";
    echo "<br/>";
    echo "Or choose how many movies you would like to see:";
    echo "</a>";
    echo "<br>";
    ?>
    <form method="post" action="moviesite.php">
        <table>
            <tr>
                <td>Enter number of movies (up to 10);</td>
                <td><input type="text" name="num"></td>
            </tr>
            <tr>
                <td>Check if you want the list sorted alphabeticaly:</td>
                <td><input type="checkbox" name="sorted"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    </body>
</html>
