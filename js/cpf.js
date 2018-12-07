$(document).ready(function(){
    $("#cpf").mask("000.000.000-00"); // , {reverse: true}
    $("#btnVerificar").click(function(evento){
        var dados = $("#cpf").val();
        $.ajax({
            type: 'post',
            dataType: 'html',
            url: 'processa_cpf.php',
            beforeSend: function() {
                $("#tela").append("<h1>Carregando...</h1>");
            },
            data: {cpf: dados},
            success: function(msg){
                $("#tela h1").remove();
                $("#tela p").remove();
                $("#tela").append("<p>" + msg + "</p>");
            },error: function(erro){
                $("#tela h1").remove();
                $("#tela p").remove();
                $("#tela").append("<p>" + erro + "</p>");
            }
        });
    });
});