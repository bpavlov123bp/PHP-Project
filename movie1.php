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
    <?php
    $myfavmovie = urldecode("Life of  Brian");
    echo "<a href='moviesite.php?favmovie=$myfavmovie'>";
    echo "Click here to see information about my favorite movie!";
    echo "</a>";
    ?>
    </body>
</html>
