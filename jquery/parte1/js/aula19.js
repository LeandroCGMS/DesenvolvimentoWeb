$(document).ready(function() {
  $("div:eq(1)").click(function() {
    $("#msg").hide(1000);//normal, fast, slow
  });

  $("div:eq(2)").click(function() {
    $("#msg").show(1000);//normal, fast, slow
  });

  $("div:eq(3)").click(function() {
    $("#msg").toggle("slow");//normal, fast, slow
  });

});
