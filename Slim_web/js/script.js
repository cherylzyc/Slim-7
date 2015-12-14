$(function(){
   Parse.$ =jQuery;
   // Parse.initialize("oTBWGFSN0QNmjGifvQ0tHeWpmC87FVwQkF9dQod1", "KAI0XIC9tkX7ZGmUiiu5s6EwFq5vQ41ovaz5P7ef");
   Parse.initialize("G9Tk4gXrp1fivDXPK1xhcvbEp92XgB7tYcFiZR1w", "5zUitdap0DgYj54naxBFKCZ7xQpjj3VnBu4wlJf4");
   

   var TextObject = Parse.Object.extend("TextObject");
   var textObject = new TextObject();
   $(".usera").parent().siblings().show();
   $(".usera").hide();
   
   $(".form-signin").on("submit",function(e){
    e.preventDefault();
      var data = $(this).serializeArray();
      username = data[0].value;
      password = data[1].value;
      Parse.User.logIn(username,password, {
           success: function(user) {
             window.location.href="http://maryanndul.com/squishy89x/AAU/Fall_2015/WebTech/slim7/final/workout.php";
             sessionStorage.setItem( "user", username );
            }

       });//end of login
    })//end of form submit func
      var currentUser = Parse.User.current();
      if (currentUser) {
        var users = sessionStorage.getItem( "user");
        $(".usera").text("Welcome, "+users);
        $(".usera").show();
        $(".usera").parent().siblings().hide();
      } else {
        $(".usera").hide();
        $(".usera").parent().siblings().show();
      }

   $(".loguout").click(function(){
     
        window.location.href="index.php";
         sessionStorage.removeItem("user");
         Parse.User.logOut();
      $(".usera").hide();
      $(".usera").parent().siblings().show();
    });
   //end of login function


   $(".form-signin2").on("submit",function(e){
    e.preventDefault();
      var data1 = $(this).serializeArray();
      username = data1[0].value;
      password = data1[1].value;
      var user = new Parse.User();
      user.set("username", username);
      user.set("password", password);
      user.signUp(null, {
        success: function(user) {
         alert("Hi" + username +", Welcome to Slim7");
         window.location.reload();
         var currentUser = Parse.User.current();
      if (currentUser) {
        var users = sessionStorage.getItem( "user");
        $(".usera").text("Welcome, "+users);
        $(".usera").show();
        $(".usera").parent().siblings().hide();
      } else {
        $(".usera").hide();
        $(".usera").parent().siblings().show();
      }
        },
        error: function(user, error) {
        // Show the error message somewhere and let the user try again.
        alert("Error: " + error.code + " " + error.message);
        }
      });
    });//end of sign up function;

    $(".accountinfo").click(function(){
       
        location.href="http://maryanndul.com/squishy89x/AAU/Fall_2015/WebTech/slim7/final/profile.php";
    });

    


})



