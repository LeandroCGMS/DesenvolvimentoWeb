$(document).ready(function() {
  //DICA DE PREENCHIMENTO DE FORMULÁRIO
  $(":input + span").css({
    border: "1px solid black",
    padding: "2px 4px",
    background: "grey",
    display: "none",
    marginLeft: "10px"
    
  });

  $(":input").focus(function() {
    $(this).next().fadeIn(1500);
  }).blur(function() {
    $(this).next().fadeOut(1500);
  });

});
