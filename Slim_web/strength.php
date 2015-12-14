<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
  <title>Slim 7</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
</head>
<body>
 <?php 

include("partials/header.html")
?>

  <div class="containertimer">
    <div class="timer">
      <!-- <h1 class="title">TIMER</h1> -->
      <img class="timer-background" src="images/strength_1.png" alt="">
      <div class="clock">
        <p class="time" id="timer"><span id="min_1">02</span>:<span id="sec_1">00</span></p>
      </div>  
      <h1 class="identify"><b>SIT UPS</b></h1>
      
      <!-- <p id="timer"></p> -->
    </div>
    <div class="timer">
      <!-- <h1 class="title">TIMER</h1> -->
      <img class="timer-background" src="images/strength_2.png" alt="">
      <div class="clock">
        <p class="time" id="timer"><span id="min_2">02</span>:<span id="sec_2">00</span></p>
      </div>
       <h1 class="identify"><b>TOE TOUCH</b></h1>
      <!-- <p id="timer"></p> -->
    </div>
    <div class="timer">
      <!-- <h1 class="title">TIMER</h1> -->
      <img class="timer-background" src="images/strength_3.png" alt="">
      <div class="clock">
        <p class="time" id="timer"><span id="min_3">02</span>:<span id="sec_3">00</span></p>
      </div>
       <h1 class="identify"><b>LUNG</b></h1>
      <!-- <p id="timer"></p> -->
    </div>
    <div class="timer">
      <!-- <h1 class="title">TIMER</h1> -->
      <img class="timer-background" src="images/strength_4.png" alt="">
      <div class="clock">
        <p class="time" id="timer"><span id="min_4">01</span>:<span id="sec_4">00</span></p>
      </div>
       <h1 class="identify"><b>LEG UPS</b></h1>
      <!-- <p id="timer"></p> -->
    </div>
      <input class="start-button"type="button" onclick="time()" value="Start">
      <input class="pause-button none"type="button" onclick="stop()" value="Pause">
    
  </div>

<?php
include("partials/footer.html")

?>



     
     <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
       <script src="//www.parsecdn.com/js/parse-1.6.7.min.js"></script>
       <script src="js/script.js"></script>



  <script src="js/strength.js"></script>
   <?php include_once("partials/analyticstracking.php") ?>
</body>  
</html>