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
    <?php include "header.php"; ?>
    <?php
    function listmovies_1()
    {
        echo "1. Life of Brian<br/>";
        echo "2. Stripes<br/>";
        echo "3. Office Space<br/>";
        echo "4. The Holy Grail<br/>";
        echo "5. Matrix<br/>";
    }
    function listmovie_2()
    {
        echo "6. Terminator 2<br/>";
        echo "7. Star Wars<br/>";
        echo "8. Close Encounters if the Third Kind<br/>";
        echo "9. Sixteen Candles<br/>";
        echo "10. Caddyshack<br/>";
    }
    if(isset($_REQUEST['favmovie']))
    {
        echo "Welcome to our site, ";
        echo $_SESSION['username'];
        echo "! <br>";
        echo "My favorite movie is ";
        echo $_REQUEST['favmovie'];
        echo "<br/>";
        $movierate = 5;
        echo "My movie rating for this movie is: ";
        echo $movierate;
    }
    else
    {
        echo "My top ";
        echo $_REQUEST['movienum'];
        echo " movies are: ";
        echo "<br/>";
        listmovies_1();
        if($_REQUEST['movienum'] == 10) listmovie_2();
    }
    ?>
    </body>
</html>
