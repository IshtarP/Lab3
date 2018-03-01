<?php


function displayWinner($hands,$players) {
    $scores= array();
    for($i = 0; $i < 4; $i++) {
        for($j = 0; $j < count($hands[$i]); $j++) {
            $score += ($hands[$i][$j] % 13) + 1;
        }
        
        array_push($scores,$score);
        $score = 0;
    }
    
    $maxScore = max($scores);
    $occurences = 0;
    $index = 0;
    for($j = 0; $j < 4; $j++) {
        if($scores[$j] == $maxScore ) {
            $occurences += 1;
            $index = $j;
        }
    }
    
    $outcome = "";
    if($occurences > 1) {
        $outcome = "Tie";
    } else {
        $outcome = $players[$index]["name"]  . " Wins!";
    }
    
    echo $outcome;
}
    
?>