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
    var msg = jQuery("#msg").val();
    if (msg == "") {
      jQuery("p#msg_error").show();
      jQuery("#msg").focus();
      return false;
    }
  });
})