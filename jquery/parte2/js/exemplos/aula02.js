$(document).ready(function() {
  //$("#filmes tr:odd").addClass("impar");
  $("#filmes tr:nth-child(4n+1)").addClass("impar");
  $("#filmes tr:nth-child(4n)").addClass("impar");
});
