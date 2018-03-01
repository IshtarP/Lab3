<!DOCTYPE html>


 <?php 
 include('functions.php');
 include('ABEfunction.php');
 
 $hands = array();
 
 $players = array(array("name" => "Wonder Woman", "linkToImage" => "img/wonderWoman.png"), 
                 array("name" => "The Flash", "linkToImage" => "img/flash.png"), 
                 array("name" => "Superman", "linkToImage" => "img/superman.png"), 
                 array("name" => "Batman", "linkToImage" => "img/batman.png"));
                 
shuffle($players);
$cards = array();

// add cards to our deck
for($i = 0; $i < 53; $i++) {
    array_push($cards,$i);
}

// so we don't repeat cards
shuffle($cards);
$index = 0;

 
 // 4 times because we have 4 players
 for($i = 0; $i < 4; $i++) {
     
     // how many cards current player will get
    $numCards = rand(4,6);
    $playerHand = array();
    
    
    for($j = 0; $j < $numCards; $j++) {
        array_push($playerHand,$cards[$index]);
        $index += 1;
    }
    
    array_push($hands, $playerHand);
  
}

?>

<html>
    
<!-- All styles and javascript go inside the head -->
    <head>
        <title>Lab 3</title>
        <meta charset="utf-8" />
        <style>
            @import url("css/styles.css");
            
        </style>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      
    </head>

<!-- This is the body -->
<body>
    <header>
        <h1>Silver Jack</h1>
    </header>
    
    <!-- Created a <div> to add the images to -->
    <div class="box">
        <h1 style="color:red;float:right;"><?php  displayWinner($hands,$players); ?> </h1>
        <!-- The images used -->
         
        <div class="card">
        <h3> <?php echo $players[0]["name"]; ?> </h3>
           
        <img src=<?php echo $players[0]['linkToImage']; ?> alt="Picture of  wonder woman" border="5px" >
          <?php displayHand($hands[0]); ?>
          
         </div>
  
          
     
        <div class="card">
        <h3><?php echo $players[1]["name"]; ?></h3>
        <img src=<?php echo $players[1]['linkToImage']; ?> alt="Picture of the flash" border="5px" />
            <?php displayHand($hands[1]); ?>
        </div>
      

    
        
        <div class="card" >
        <h3><?php echo $players[2]["name"]; ?></h3>
        <img src=<?php echo $players[2]['linkToImage']; ?> alt="Picture of superman" border="5px"/>
            <?php displayHand($hands[2]); ?>
        </div>
        
        
      
      
        
        <div class="card" >
        <h3><?php echo $players[3]["name"]; ?></h3>
        <img  src=<?php echo $players[3]['linkToImage']; ?> alt="Picture of Batman" border="5px" />
            <?php displayHand($hands[3]); ?>
           
        </div>
     
        <br>
        
        <div>
            <hr>
        </div>
        <!-- Add a <hr> see if it createas a bottom one -->
        
        <!-- create a <div> tag -->
       
        <form>
            <input type="submit" value="Play"/>
        </form>
    
    </div> 
   
    
    
</body>
</html>
