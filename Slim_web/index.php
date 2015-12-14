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
<body onload="addevent()">
  <?php 
     include("partials/header.html");
     ?>

     <div class="container">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="font-size:29px;">GET THE BODY OF YOUR DREAMS</h1>
              
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>IN 7 MINUTES</h1>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>SIMPLE AND QUICK</h1>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/4.jpg" alt="third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>SLIM 7</h1>
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <img class=".img-responsive" src="images/icon-01.svg" width="100" height="100">
          <h2 style="font-size:15px;">WORKOUTS</h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <img class=".img-responsive" src="images/icon-02.svg" width="100" height="100">
          <h2 style="font-size:15px;">TUTORIALS</h2>
          
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 col-md-4 col-sm-4 ">
          <img class=".img-responsive" src="images/icon-03.svg" width="100" height="100">
          <h2 style="font-size:15px;">HEALTH PLANS</h2>
        
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

     </div>
     

     <?php include("partials/footer.html");?>
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
                <button class="btn btn-lg btn-warning btn-block btn-signin" id="submit" type="submit">Sign in</button>
            </form><!-- /form -->
        </div>   
       </div>
       </div>
  
     </div>
     <div class="container">
     <div class="modal fade" id="myModal2" role="dialog">
     <div class="modal-dialog">
    
   
        <div class="card card-container " id="signinform">
         
            <img id="profile-img" class="profile-img-card" src="images/profile-icon.svg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin2">
              
                <input type="text" id="inputUsername" class="form-control" placeholder="User name" name="username"required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-warning btn-block btn-signin" id="submit" type="submit">Sign up</button>
            </form><!-- /form -->
        </div>   
       </div>
       </div>
  
     </div>
      <script> 
      function addevent(){
     $(".usera").hide();
      $(".usera").parent().siblings().show();
   }

</script>
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
       <script src="//www.parsecdn.com/js/parse-1.6.7.min.js"></script>
       <script src="js/script.js"></script>

 <?php include_once("partials/analyticstracking.php") ?>

</script>
</body>
</html>