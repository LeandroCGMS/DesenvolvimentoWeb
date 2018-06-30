$(document).ready(function() {
  $("div:eq(1)").click(function() {
    //for(var i = 0; i < 10; i++) {
      //$("#msg").fadeOut(1000);//normal, fast, slow
      //$("#msg").fadeIn(1000);//normal, fast, slow
      //$("#msg").fadeTo(1000,0.3);// 0 - 1
      $("#msg").fadeToggle(1000);// 
    //}
    
  });

  $("div:eq(2)").click(function() {
    //$("#msg").slideUp(1000); //normal, fast, slow
    //$("#msg").slideDown(1000); //normal, fast, slow
    $("#msg").slideToggle(1000); //normal, fast, slow
  });

  

});
