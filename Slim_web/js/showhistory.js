$(function(){
    Parse.initialize("G9Tk4gXrp1fivDXPK1xhcvbEp92XgB7tYcFiZR1w", "5zUitdap0DgYj54naxBFKCZ7xQpjj3VnBu4wlJf4");
      var Historys = Parse.Object.extend("history");
      var history = new Historys();
      var query = new Parse.Query(Historys);
      var users = sessionStorage.getItem( "user");
       $('.check').hide();
    query.equalTo("username", users);
    query.find({
         success:function(result){
           
            for (var i = 0; i < result.length; i++) { 
                var object = result[i];
                (function($) {
                    var dateC = object.get('createdAt');
                    var date = String(dateC); 
                    var datelength =date.substr(0,25);

                    $('.type').append('<li><input type="checkbox" id="inlineCheckbox1" value="'+i+'" >&nbsp' + object.get('typeofwork') + '</li>' );
                    $('.date').append('<li>' +datelength + '</li>');
                })(jQuery); 
                             
            } 
            
            $("input[type='checkbox']").click(function(){
                var value = $(this).attr('value');
                var Checked = $(this).is(':checked');
                if (!Checked) {     
                    // alert(value + " is unchecked.");
                    $('.check'+value+'').remove(); 
                }else{
                    
                    $('.check').append('<li class="check'+value+'">' +value + '</li>'); 
                    // alert(value + " is checked.");
                }
            })
            $(".widthcontrol button").click(function(){

                    $(".check li").each(function(){
                        var y = $(this).text();
                        var num =Number(y);
                        result[num ].destroy({});
                    })
                    window.location.reload();
            })  
           
         },error:function(user,eror){
            console.log(error);
                   
         }
    });

});