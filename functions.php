<?php
    
    function displayHand($hand) {
        
        $points = array();
        $count = count($hand);
        
        for($i = 0; $i < $count; $i++) {
            
            
            $cardvalue = $hand[$i] % 13;
            
            if($hand[$i] < 13) {
                $cardSuit = "clubs";
                $points[$i] = $hand[$i] % 13;
            }
            elseif($hand[$i] > 13 && $hand[$i] <= 26) {
                $cardSuit = "diamonds";
                $points[$i] = $hand[$i] % 13;
            }
            elseif($hand[$i] > 26 && $hand[$i] <= 39) {
                $cardSuit = "hearts";
                $points[$i] = $hand[$i] % 13;
            }
            else {
                $cardSuit = "spades";
                $points[$i] = $hand[$i] % 13;
            }
            
            echo "<img src='cards/$cardSuit/$cardvalue.png' alt=' Card: $cardSuit $cardvalue' />" ;
        }
        
        $total = array_sum($points);
        echo "&nbsp;Score: $total";
    }


?>