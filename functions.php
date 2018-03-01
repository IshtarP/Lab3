<?php
    
    function displayHand($hand) {
        
        $points = 0;
        $count = count($hand);
        
        for($i = 0; $i < $count; $i++) {
            
          
            $cardvalue = ($hand[$i] % 13) + 1;

            
            if($hand[$i] <= 13) {
                $cardSuit = "clubs";
              
            }
            elseif($hand[$i] > 13 && $hand[$i] <= 26) {
                $cardSuit = "diamonds";
                
            }
            elseif($hand[$i] > 26 && $hand[$i] <= 39) {
                $cardSuit = "hearts";
                
            }
            else {
                $cardSuit = "spades";
                
            }
            $points += ($hand[$i] % 13) + 1;
            echo "<img src='./img/cards/$cardSuit/$cardvalue.png' alt=' Card: $cardSuit $cardvalue' />" ;
        }
        
        
        echo "<div class=\"try\">
              <h3 id=\"score\">Score: $points</h3>
        </div>";
        
        
    }
    



?>