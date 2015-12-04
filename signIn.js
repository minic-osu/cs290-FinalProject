$(function() {
  $("#submit_login").click(function() {
	var username = $("input#username").val();
	if (username == "") {
	   $('.errormess').html('Please Insert Your Username');	
       return false;
    }
	var password = $("input#password").val();
	if (password == "") {
	   $('.errormess').html('Please Insert Your Password');	
       return false;
    }
	var dataString = 'username='+ username + '&password=' + password;

	$.ajax({
      type: "POST",
      url: 'signIn.php',
      data: dataString,
	  dataType: "html",
      success: function(data) {
	  if (data == 0) {
	  	 	$('.errormess').html('Wrong Login Data');
	  }else {
			$('.errormess').html('<b style="color:grey;">Loading...</b>');	
			document.location.href = 'homePage.php';	
		}
      }
     });
    return false;
	});
});