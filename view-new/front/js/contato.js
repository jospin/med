jQuery(function() {
  jQuery('.error').hide();
  var messagetext = jQuery("textarea#msg");
  messagetext.focusout(function(){
		if (messagetext.val() == ''){messagetext.text('Your Message'); }
  });
  messagetext.focus(function(){
		if (messagetext.val() == 'Your Message') {messagetext.text(''); }					   
  });
  jQuery("#submit_btn").click(function() {
		// validate and process form
		// first hide any error messages
    jQuery('.error').hide();
	  var name = jQuery("input#name").val();
		if (name == "" || name.length<3) {
      jQuery("p#name_error").show();
      jQuery("input#name").focus();
      return false;
    }
    var email = jQuery("input#email").val();
    if (email == "") {
      jQuery("p#email_error").show();
      jQuery("input#email").focus();
      return false;
    }
	  var phone = jQuery("input#fone").val();
	  if (phone == "") {
      jQuery("p#fone_error").show();
      jQuery("input#fone").focus();
      return false;
    }
	
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(!emailReg.test(email)) {
	jQuery("p#email_error").show();
    jQuery("input#email").focus();
      return false;
	}
	
	 //  var url = jQuery("input#url").val();
		// if (url == "") {
  //     jQuery("input#url").focus();
  //     return false;
  //   }

	  var msg = jQuery("textarea#msg").val();
	  if (msg == "") {
  	  jQuery("p#msg_error").show();
  	  jQuery("textarea#msg").focus();
  	  return false;
    }

    var id_imovel= jQuery("input#id_imovel").val();
    var referencia= jQuery("input#ref").val();
		
		var dataString = 'name='+ name + '&email=' + email + '&fone=' + phone + '&url=' + url + '&msg=' + msg + '&id_imovel='+id_imovel + '&referencia='+referencia;

		alert (dataString);return false;
		
	  jQuery.ajax({
      type: "POST",
      url: "_lib/PHPMailer/email.php",
      data: dataString,
      success: function() {
        jQuery('#contactform').html("<div id='message'></div>");
        jQuery('#message').html("<strong>Mensagem enviada com sucesso!</strong>")
        .append("<p>Entraremos em contato em breve.</p>")
        .hide()
        .fadeIn(1500, function() {
          jQuery('#message');
        });
      }
     });
    return false;
	});
});

