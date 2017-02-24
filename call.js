$(document).ready(function() {
    $('.fb-login-img').click(function(event){ // capture the event
         event.preventDefault(); // handle the event
         $.ajax({
		    url:'localhost/frameworkApp/fblogin.php', 
		    type: 'POST', 
		    success: function(){
		    	alert('success');
		    }, 
		    error: function(){
		    	alert('failure')
		    }
		});
	});
});