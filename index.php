<?php
session_start();
$_SESSION["timesAccessed"];
$start = microtime(true);

function displayElapsedTime(){
    global $start;
    
    $elapsedSecs = microtime(true) - $start;
    echo "Elapsed Time: " . $elapsedSecs . " Seconds <br>"; //Gets time the page took to load.
    
    if ($_SESSION["timesAccessed"] == null) 
    {
    $_SESSION["timesAccessed"] ++;
    }
    $_SESSION["timesAccessed"]++;    
    
    echo "Average Time Elapsed: " . (($elapsedSecs)/($_SESSION["timesAccessed"])) . " Seconds <br>";
    //Takes time taken to load and divides it by the number of times the page has been accessed.
    
    echo "Total Times Played: " . $_SESSION["timesAccessed"];
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
        displayElapsedTime();
        //getAverageTimeElapsed()
        ?>
    </body>
</html>