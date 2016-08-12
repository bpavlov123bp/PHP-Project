<?php
session_start();
if($_SESSION['authuser'] != 1)
{
    echo "Sorry, but you don't have permission to view this page, you loser!";
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My movie site - <?php echo $_REQUEST['favmovie']; ?></title>
    </head>
    <body>
    <?php
    echo "Welcome to our site, ";
    echo $_SESSION['username'];
    echo "! <br>";
    echo "My favorite movie is ";
    echo $_REQUEST['favmovie'];
    echo "<br>";
    $movierate = 5;
    echo "My movie rating for this movie is: ";
    echo $movierate;
    ?>
    </body>
</html>
