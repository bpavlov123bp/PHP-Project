<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>How many days in this month?</title>
    </head>
    <body>
    <?php
    $month = date("n");
    if($month == 1) echo "31";
    if($month == 2) echo "28";
    if($month == 3) echo "31";
    if($month == 4) echo "30";
    if($month == 5) echo "31";
    if($month == 6) echo "30";
    if($month == 7) echo "31";
    if($month == 8) echo "31";
    if($month == 9) echo "30";
    if($month == 10) echo "31";
    if($month == 11) echo "30";
    if($month == 12) echo "31";
    ?>
    </body>
</html>