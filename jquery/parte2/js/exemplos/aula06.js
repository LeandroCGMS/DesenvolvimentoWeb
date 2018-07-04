$(document).ready(function() {
  //OCULTAR E EXIBIR LINHAS DE TABELAS
  $("table tr:not(.sub)").hide();
  $(".sub th").prepend("<img src='img/mais.png' class='maismenos'/>");
  $("img").click(function() {
    if($(this).attr("src") == "img/menos.png") {
      $(this).attr("src","img/mais.png")
      .parents().siblings("tr").hide();
    } else {
      $(this).attr("src","img/menos.jpeg")
      .parents().siblings("tr").show();
    }
  });

});
