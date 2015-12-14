// A $( document ).ready() block.
$(document).ready(function() {
    $(".backcolor").hide();
     $(".myprofile").show();

     var val = document.getElementById("Fname");
    if(!val){
      $(".backcolor").hide();
       $(".myprofile").show();
       
    }else{
      $(".backcolor").show();
       $(".myprofile").hide();
    }
          
    $("#update").click(function(){
      $(".backcolor").hide();
       $(".myprofile").show();
    })    
    

    $(".myprofile").submit(function(e){
      e.preventDefault();
      window.location.reload();
      var form = $(this).serializeArray();
      
      $.each(form, function(i,val){       
        localStorage.setItem(i, val.value);
      });
    });//end of submit form

    function submit(name,num){
      $("#"+name+"").text(localStorage.getItem(num));
      $("input[name='"+name+"']").val(localStorage.getItem(num));
    };//end of submit function;

    submit("Fname",0);
    submit("Lname",1);
    submit("email",2);
    submit("phone",3);
    submit("website",4);
    submit("country",6);
    submit("address",7);
     var photo = localStorage.getItem(5);
     // document.getElementById(photo).src= photo;
     $("#photo").attr("src",photo);

});







