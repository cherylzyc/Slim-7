<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
  <title>Slim 7</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/profile.css">
  
  
 </head>
 <body>

     <?php 
     include("partials/header.html");
     if (!ini_get('display_errors')) {
    ini_set('display_errors', 'off');
}
      
     ?>
     
            <?php 

                 if(isset($_POST['submit'])){

         
                $_COOKIE['Fname'] = $_POST["Fname"];
                $_COOKIE['Lname'] = $_POST["Lname"];
                $_COOKIE['email']= $_POST["email"];
                $_COOKIE['phone'] = $_POST["phone"];
                $_COOKIE['website'] = $_POST["website"];
                $_COOKIE['photo'] = $_POST["photo"]; 
                 $_COOKIE['address'] = $_POST["address"];
                 $_COOKIE['country'] = $_POST["country"];

                 $Fname = $_COOKIE['Fname'];
                 $Lname = $_COOKIE['Lname'];
                 $email = $_COOKIE['email'];
                 $phone = $_COOKIE['phone'];
                 $website = $_COOKIE['website'];
                 $photo = $_COOKIE["photo"]; 

                 $address = $_COOKIE['address'];
                 $country = $_COOKIE['country'];

                  }

                 ?>
         <div class="container">
       <br><br>
       <div class="backcolor">
        <div class="row ">
        <div class="col-sm-3 col-md-3 col-sm-3 col-xs-4 col-xxs-12">
            <img src=""
            alt="1" class="img-rounded img-responsive" id="photo" />
            
            <button class="btn btn-warning btn-signin   btn-block buttonBox" id="update">Update</button><br>
        </div>
        <div class="col-sm-6 col-md-6 col-sm-6 col-xs-8 col-xxs-12">
            <blockquote >
                <p ><span id="Fname"></span> <span id="Lname"></span></p> 
                <small>
                <cite title="Source Title">
                <i class="glyphicon glyphicon-map-marker"></i>
                <span id="country"></span>
                </cite>
                </small>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> <span id="email"></span>
                <br/> 
                <i class="glyphicon glyphicon-globe"></i> <span id="website"></span>
                <br/> 
                <i class="glyphicon glyphicon-phone"></i> <span id="phone"></span>
                <br/> 
                <i class="glyphicon glyphicon-map-marker"></i>  <span id="address"></span>
                </p>

        </div>
         
        </div>
        </div>
        </div>
            <div class="row">    
         <div class="container ">
         
             
                 <form  method="post" class="myprofile center-block"enctype="multipart/form-data" name="form1">
                
                <label>First Name</label><br>
                <input type="text" class="form-control" placeholder="First Name" class="input-xlarge" name="Fname" value=""><br><br>
                <label>Last Name</label><br>
                <input type="text" class="form-control" placeholder="Last Name" class="input-xlarge" name="Lname"value=""><br><br>
                <label>Email</label><br>
                <input type="text" class="form-control" placeholder="Email" class="input-xlarge" name="email"value=""><br><br>
               
                
                
                <label>Phone</label><br>
                <input type="text" class="form-control" placeholder="Phone" class="input-xlarge" name="phone"value=""><br><br>
                <label>Website</label><br>
                <input type="text" class="form-control" placeholder="Website" class="input-xlarge" name="website"value=""><br><br>
                <label>Photo</label><br>
                <select id="selectbasic" name="photo" class="form-control">
                  <option value="http://magnoliadays.com/wp-content/uploads/2012/06/Aster-Flower.jpg">Flower</option>
                  <option value="https://pbs.twimg.com/profile_images/548735129922068480/RdgQJ7_P_400x400.jpeg">Puppy</option>
                  <option value="https://pbs.twimg.com/profile_images/427937336244981760/zKi-Q8j1_400x400.jpeg">Cat</option>
                  <option value="https://49.media.tumblr.com/b003fc5541b530bbfce8fdc77111ae2c/tumblr_nnb6wcTo0G1t2yvn6o1_400.gif">Anime Cat</option>
                </select>
                <br><br>
                <label>State, Country</label><br>
                <input type="text" class="form-control" placeholder="State, Country" class="input-xlarge" name="country"value=""><br><br>
                <label>Address</label><br>
                <input type="text" class="form-control" placeholder="Address" class="input-xlarge" name="address"value=""><br>
                <br><br>
                
                <button class="btn btn-lg btn-warning btn-block btn-signin btn-center pull-right" id="submit" type="submit" name="submit" style="width:155px;">Submit</button>
            </form>

         </div>
        </div>
        <br> <br><br>
         <?php include("partials/footer.html");?>
        
       
       
       
         
       <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
       <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

       <script src="//www.parsecdn.com/js/parse-1.6.7.min.js"></script>
       <script src="js/script.js"></script>
        <script src="js/profile.js"></script>

        <?php include_once("partials/analyticstracking.php") ?>

</body>
</html>