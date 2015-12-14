<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Slim 7</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/mystyles.css">
</head>

<body>
<?php 

include("partials/header.html")
?>
<div class="container" align="center">
<div class="jumbotron">
      <h1>CONGRATULATIONS</h1>
      <br>
      <h4>YOU FINISHED YOUR DAILY WORKOUT</h4>
      
      
</div>

<div class="panel-body" >    
<div href="exercise.php">
      <button type="button" class="btn btn-block btn-lg btn-custom">SCHEDULE EXERCISE SESSION</button> 

</div>

</div>       

<div class="panel-body" >    
<div ><a href="history.php">
      <button type="button" class="btn btn-block btn-lg btn-custom">PROGRESS</button> 
      </a>
</div>



</div>

   <?php 

include("partials/footer.html")
?>
      <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
   
        <div class="card card-container " id="signinform">
         
            <img id="profile-img" class="profile-img-card" src="images/profile-icon.svg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
              
                <input type="text" id="inputUsername" class="form-control" placeholder="User name" name="username"required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <a href="workout.php"><button class="btn btn-lg btn-warning btn-block btn-signin" id="submit" type="submit">Sign in</button></a>
            </form><!-- /form -->
        </div>   
       </div>
       </div>
  
     </div>

     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
       <script src="//www.parsecdn.com/js/parse-1.6.7.min.js"></script>
       <script src="js/script.js"></script>

       <?php include_once("partials/analyticstracking.php") ?>
</body>
</html>