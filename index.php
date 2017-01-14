<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Memory Game</title>
  <link rel="stylesheet" href="./styles/bootstrap.min.css">
  <link rel="stylesheet" href="./styles/styles.css">
  <script type="text/javascript" src="./vendors/jquery-3.1.1.min.js" ></script>
  <script type="text/javascript" src="script.js" ></script>
</head>
<body>
<div>
  <div id="userInfo">
    inputs go here for the game
  </div>
  <div class="container">
    <?php
    $number = array();

     //Need to get random varibles 4 numbers with random range between 0 and 15
     for($i = 0; $i < 16; $i++)
     {
       $random = rand(0,15);
       array_push($number, $random);
     }
     //Need a timer funciton
     //need to add IDs and hide the image except on hover / timed
     // click to match functionality
     getImages();

    ?>
    <div class="row">
     <div class="col-md-3" id="hidden1"><?php echo $imageArray[$number[rand(0,15)]]?></div>
     <div class="col-md-3" id="hidden2"><?php echo $imageArray[$number[rand(0,15)]]?></div>
     <div class="col-md-3" id="hidden3"><?php echo $imageArray[$number[rand(0,15)]]?></div>
     <div class="col-md-3" id="hidden4"><?php echo $imageArray[$number[rand(0,15)]]?></div>
  </div>
  <div class="row">
   <div class="col-md-3" id="hidden5"><?php echo $imageArray[$number[rand(0,15)]]?></div>
   <div class="col-md-3" id="hidden6"><?php echo $imageArray[$number[rand(0,15)]]?></div>
   <div class="col-md-3" id="hidden7"><?php echo $imageArray[$number[rand(0,15)]]?></div>
   <div class="col-md-3" id="hidden8"><?php echo $imageArray[$number[rand(0,15)]]?></div>
</div>
</div>
</body>
</html>
