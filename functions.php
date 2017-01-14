<?php include "db.php"; ?>

<?php
$imageArray = array();
//Image URLS Stored to varialbes

//Function that gets images
function getImages()
{
  global $connection;
  global $imageArray;
  $query = "SELECT * FROM urls";

  $result = mysqli_query($connection, $query);
  if(!$result)
  {
    die("select query failed big time" . mysqli_error());
  }

  while($row = mysqli_fetch_array($result))
  {
    array_push($imageArray, $row[1]);

  }
  
}



 ?>
