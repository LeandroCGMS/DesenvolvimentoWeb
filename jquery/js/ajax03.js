$(document).ready(function(){
    $("#btnCliqueAqui").click(function(){
        $.get("arrayJson.json",function(dados){
            console.log(dados);
            if($("#info").empty()){
                $.each(JSON.parse(dados),function(indice,objeto){
                    $("#info").append(objeto.nome+' '+objeto.sobrenome+'<br/>');
                });
            }
        });
    });
});