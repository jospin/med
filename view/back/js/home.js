$(document).ready(function(){

  $(".excluir").click(function(){
    var id_imovel = $(this).attr("id");
    if(confirm('Tem certeza que deseja excluir? (após a confirmação não é possível reverter o processo)')){
      window.location = "imovelExcluir.php?id_imovel=" + id_imovel;
    }
  });

});