$(document).ready(function(){
    $("#botao1").click(function(){
        $.getJSON("dadosAula04.json",function(dados){
            console.log(dados);
            $.each(dados.empregados, function(indice, objeto){
                $("#lista").append("<li>"+objeto.nome+": R$" + objeto.salario+",00</li>");
            });//asfsda
        });
    });
});