$(document).ready(function() {
  //$("#filmes tr:odd").addClass("impar");

  //DESTACAR LINHAS DE UMA TABELA
  $("#filmes tr:odd").addClass("impar");
  $("#filmes tr").hover(
    function() {$(this).addClass("destaque");},
    function() {$(this).removeClass("destaque");}
  );
});
