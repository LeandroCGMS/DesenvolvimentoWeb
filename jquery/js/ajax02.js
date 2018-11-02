$(document).ready(function(){
    $("#btnCliqueAqui").click(function(){
        $.get('dados.json',function(dados){
            console.log(dados);
            $("#info").text(dados.nome + ' ' + dados.sobrenome);
        });
    });
});