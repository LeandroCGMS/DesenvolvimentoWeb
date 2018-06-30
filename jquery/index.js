$(document).ready(function() {
    $('img').click(function(){
      //alert("Alerta chamada pelo click na imagem PHP");
      var nome = $('#nome').val();
      var email = $('#email').val();

      var varDados = 'nome=' + nome + '&email=' + email;
      console.log(varDados);

      $.ajax({
        type: 'POST',
        url: 'funcoes.php',
        data: varDados,
        success: function() {
          alert('Alerta Sucesso do Ajax: função PHP chamada com sucesso');
        }
      });

    });


});
