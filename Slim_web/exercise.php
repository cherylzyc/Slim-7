<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slim 7</title>
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
 <?php 

include("partials/header.html")
?>
  



<div class="container">
<div class="exercisetype">
    <h1>TYPE OF EXERCISE</h1>
  </div>
  </div>
<br>
<div class="container">

<div class="row">
      <div class="col-md-5">
<div class="thumbnail-small">

   <a href="flex.php" class="FLEXIBILITY"> <img src="images/flex.jpg"  >
        <h2 class="center" >FLEXIBILITY</h2>
   </a>
</div>

</div>


<div class="col-md-5">
<div class="thumbnail-small">

   <a href="core.php" class="CORE"> <img src="images/core.jpg" >
      <h2 class="center" >CORE</h2></a>
</div> 
</div> 
</div> 

<div class="row">
<div class="col-md-5">
<div class="thumbnail-small">


   <a href="strength.php"  class="STRENGTH"> <img src="images/strength.jpg" >
        <h2 class="center">STRENGTH</h2></a>
</div>
</div> 


    <div class="col-md-5">
    <div class="thumbnail-small">

   <a href="relax.php" class="RELAXATION"> <img src="images/relax.jpg" >
  
 
        <h2 class="center" >RELAXATION</h2></a>
 
</div>    
</div>

</div>

 <?php 

include("partials/footer.html")
?>
  
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
       <script src="//www.parsecdn.com/js/parse-1.6.7.min.js"></script>
       <script src="js/script.js"></script>
       <script src="js/history.js"></script>

 <?php include_once("partials/analyticstracking.php") ?>
</body>
</html>