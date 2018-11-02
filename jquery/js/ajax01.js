$(document).ready(function(){
    $("#btnCliqueAqui").click(function(){
        $.get("dados.txt",function(dados,estado,xhr){
            console.log("Mensagem: " + dados + "\nEstado: " + estado + " " + xhr.status);
        });
    });
});