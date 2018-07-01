$(document).ready(function() {
  //EVENTOS DE TECLADO E FORMULÁRIOS
  $(":text").keyup(function() {
    $("#msg").text($(this).val());
  }).focus(function() {
    $(this).css("background-color","yellow");
    $("#msg").text("Focus");
  }).blur(function() {
    $(this).css("background-color","#DDD");
    $("#msg").text("Blur");
  });

  //valiidação de formulários
  $("form").submit(function(){
    if($(":text").val() == "XTI"){
      return true;
    }
    alert("Validação reprovada.");
    return false;
  });

  $("select").change(function(){
    var escolha = $("option:selected").text();
    $("#msg").text("Escolhido: " + escolha);
  });

  $("textarea").select(function() {
    $("#msg").text($(this).val());
  });

});
