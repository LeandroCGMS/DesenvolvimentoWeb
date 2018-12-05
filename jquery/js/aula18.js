$(document).ready(function() {
  //EVENTOS DE TECLADO E FORMULÁRIOS
  /*$(":text").keyup(function() {
    $("#msg").text($(this).val());
  });*/

  function msg(e) {
    $("#msg").text($(this).val());
  }

  /*$(":text").bind("keyup", function(e) {
    $("#msg").text($(this).val());
  });*/
  // $(":text").keyup(msg).focus(msg).blur(msg);
  $(":text").bind("keyup focus blur", msg);
  $("fieldset").delegate(":text","keyup",msg);
  $(":button").bind("click", function(e, src, width) {
    $("#msg").append($("<img/>").attr("src",src).css("width",width));

    // $(":text").unbind("keyup", msg);
    //
    // $(":text").val("Texto incluído via jQuery");
    // $(":text").trigger("focus");


    //$("fieldset").prepend("Outro: <input type='text' name='outro'/><br>");

  });

  $(":button").trigger("click", ["img/ricardo.jpeg","90px"]);

});
