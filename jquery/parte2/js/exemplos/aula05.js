$(document).ready(function() {
  //$("#filmes tr:odd").addClass("impar");

  //DESTACAR LINHAS DE UMA TABELA
  $("#filmes tr:odd").addClass("impar");
  $("#filmes tr th").each(function (i) {
    var nomeColuna = $(this).text();

    $("tr td:nth-child("+ (i+1) +")").hover(function() {
      var nomeCelula = $(this).text();
      $(this).addClass("destaque").prepend("<div class='tooltip'>Coluna "+ nomeColuna +"<br/>Célula "+ nomeCelula +"</div>");
      $(this).click(function() {
        $("table tr").remove("destaque");
        $(".tooltip").remove();
        $("table tr:contains("+ nomeCelula +")").addClass("destaque");
      });
    }, function() {
      $(this).removeClass("destaque");
      $(".tooltip").remove();
    });
  });
  //DESTACANDO CÉLULAS E APRESENTADO TOOLTIPS
  

});
