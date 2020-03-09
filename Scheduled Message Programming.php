<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
      
   body {
  background-color: lightblue;
}
    
    p {
  background-color: darkviolet;
        font-family: cursive
}
    
    </style>
  <body>
   
   
    <?php
      //This is a PHP script that knows which day of the week it is

      //First we get the week day as an integer using a build-in PHP function
      $dayofweek = date("w");

      //Then we use a switch to give a message depending on the day it is
      switch ($dayofweek) {
        case 1:
          echo "<p style=color:MediumSeaGreen>It is Monday!</p>";
          break;
        case 2:
          echo "<p style=color:MediumSeaGreen class=serif>It is Tuesday!</p>";
          break;
        case 3:
          echo "<p style=color:MediumSeaGreen class=serif>It is Wednesday!</p>";
          break;
        case 4:
          echo "<p style=color:MediumSeaGreen class=serif>It is Thursday!</p>";
          break;
        case 5:
          echo "<p style=color:MediumSeaGreen class=serif>It is Friday!</p>";
          break;
        case 6:
          echo "<p style=color:MediumSeaGreen class=serif>It is Saturday!</p>";
          break;
        case 0:
          echo "<p style=color:MediumSeaGreen class=serif>It is Sunday!</p>";
          break;
        default:
          echo "Error!";
          break;
      }
    ?>
  </body>
</html>
