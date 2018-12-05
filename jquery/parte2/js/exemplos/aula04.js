$(document).ready(function() {
  //$("#filmes tr:odd").addClass("impar");

  //DESTACAR LINHAS DE UMA TABELA
  $("#filmes tr:odd").addClass("impar");
  $("#filmes tr th")
  .not("th:first-child")
  .prepend("<span>+</span>")
  .css("cursor","pointer");
  $("#filmes tr th").each(function(i) {
    //var n = i -1;
    $(this).click(function() {
      $("td").removeClass("destaque");
      $(this)
      .parents("tr")
      .siblings("tr").each(function() {
      //.children("td").each(function() {
        $(this).children("td:eq("+i+")")
        .addClass("destaque");
      });
    });
  });
});
