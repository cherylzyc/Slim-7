$(function(){
   Parse.initialize("G9Tk4gXrp1fivDXPK1xhcvbEp92XgB7tYcFiZR1w", "5zUitdap0DgYj54naxBFKCZ7xQpjj3VnBu4wlJf4");
    var Historys = Parse.Object.extend("history");
    var history = new Historys();
    var users = sessionStorage.getItem( "user");
    var date = new Date();
     

    var id = Parse.User.current().id
    var query = new Parse.Query(Historys);
      query.equalTo("objectId", id);
      query.find({
      success: function(results) {  
        function gettype(classname){
          $("."+classname).click(function(){
            sessionStorage.setItem("typeofwork", classname);

            var type = sessionStorage.getItem( "typeofwork"); 
            history.save({
              username: users,
              typeofwork: type
            },{
              success: function(history){
                alert("The history was saved successfully.");0
              },
              error: function(history,error){
                alert("The save failed.");
              }
            });
            history.save();
          });     
        }      
        gettype("FLEXIBILITY");
        gettype("CORE");
        gettype("STRENGTH");
        gettype("RELAXATION");
      },
      error: function(error) {
        alert("Error: " + error.code + " " + error.message);
      }
      });
      //end of save record function;

   
      
     
     

        


   
})