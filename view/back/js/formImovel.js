$(document).ready(function(){

	$("#addFieldFoto").click(function(){
		
		$(".fieldFoto").clone().insertAfter("#fotos ol li:last").removeClass('fieldFoto');
		
	});

  $(".removePhoto").click(function(){
    var removePhoto = $(this);
    if(confirm("Deseja remover a foto?")){
      $.post('imovelFotoRemove.php',{id: removePhoto.attr("id")}, function(response){
        removePhoto.parent().hide();
      });
    }
  });
	
});
