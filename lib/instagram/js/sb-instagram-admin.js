jQuery(document).ready(function($) {

    //Autofill the token and id
    var hash = window.location.hash,
        token = hash.substring(14),
        id = token.split('.')[0];
    //If there's a hash then autofill the token and id
    if(hash){
      $("#access_token").val(token);
      $("#user_id").val(id);
      $("#instagram-config").append('<p><b>Values loaded from query params</b></p>');
    }
});