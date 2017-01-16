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
    <form action ="" method="post">
      <label for="username">Enter a username</label>
      <input type="text" name="username">
      <input class="btn btn-primary" type="submit" name="submit" value="submit">
    </form>
  </div>
  <div class="container">
    <?php

     //Need to get random varibles 4 numbers with random range between 0 and 15
     //Need a timer funciton
     //need to add IDs and hide the image except on hover / timed
     // click to match functionality
     getImages();
     $one = $imageArray[rand(0,1)];
     $two = $imageArray[rand(2,3)];
     $three = $imageArray[rand(4,5)];
     $four = $imageArray[rand(6,7)];
     $five = $imageArray[rand(8,9)];
     $six = $imageArray[rand(10,11)];

    ?>

    <div class="row">
     <div class="col-md-3" id="hidden1"><?php echo $one; ?></div>
     <div class="col-md-3" id="hidden2"><?php echo $six; ?></div>
     <div class="col-md-3" id="hidden3"><?php echo $four;?></div>
     <div class="col-md-3" id="hidden4"><?php echo $two; ?></div>
   </div>
  <div class="row">
   <div class="col-md-3" id="hidden5"><?php  echo $six;  ?></div>
   <div class="col-md-3" id="hidden6"><?php  echo $three ?></div>
   <div class="col-md-3" id="hidden7"><?php  echo $five  ?></div>
   <div class="col-md-3" id="hidden8"><?php echo $one;   ?></div>
</div>
<div class="row">
  <div class="col-md-3" id="hidden9"><?php echo $three   ?></div>
  <div class="col-md-3" id="hidden10"><?php echo $two;   ?></div>
  <div class="col-md-3" id="hidden11"><?php echo $five   ?></div>
  <div class="col-md-3" id="hidden12"><?php echo $four   ?></div>
</div>
</div>
</body>
</html>
