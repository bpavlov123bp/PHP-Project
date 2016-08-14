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
    $favmovie = array("Life of Brian", "Office Space", "The Holly Grail", "Matrix",
        "Terminator 2", "Star Wars", "Close Encounters of the Third Kind", "Sixteen Candles", "Caddyshack");
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
        echo "My top ".$_POST['num']." movies are:<br>";
        if(isset($_REQUEST['sorted']))
        {
            sort($favmovie);
        }
        $numlist = 1;
        while($numlist <= $_POST['num'])
        {
            echo $numlist;
            echo ". ";
            echo pos($favmovie);
            next($favmovie);
            echo "<br>\n";
            $numlist++;
        }
    }
    ?>
    </body>
</html>
