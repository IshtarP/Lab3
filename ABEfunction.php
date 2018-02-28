<?php


function displayWinner()
    {
        global $names,$players,$score, $winnings,$topscore;
        $max=0;
        $winners=0;
        for($i = 0; $i < count($players); $i++)
        {
            if($score[$i]>$max)
            {
               $max=$score[$i];
            }
        }
        for($s=0;$s< count($players); $s++)
        {
                if($score[$s]<=42)
                {
                if($score[$s]>$topscore)
                {
                    $topscore=$score[$s];
                }
            }
        }
       
        for($i=0; $i<count($players); $i++)
        {
            
            if($score[$i]==$topscore)
            {
                echo "<h1>" . $names[$players[$i]]." Wins ".$winnings=+$score[0]+$score[1]+$score[2]+$score[3]." points!" . "<hr/>";
                echo "<br/>";
                $winners++;
            }
        }
           if($winners==0)
            {
                echo "<h1> Nobody wins! <hr/>";
            }
    }
    
?>