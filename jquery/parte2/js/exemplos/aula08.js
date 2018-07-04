$(document).ready(function() {
  //SELECIONAR TODOS OS CHECKBOX

  $(".toggle").change(function() {
    if(this.checked){
      $(":checkbox").attr("checked","checked");
    } else {
      $(":checkbox").removeAttr("checked","checked");
    }
  });

  $(".tudo").click(function() {
    $(":checkbox").attr("checked","checked");
    return false;
  });

  $(".nada").click(function() {
    $(":checkbox").removeAttr("checked","checked");
    return false;
  });

});
