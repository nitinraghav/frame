$(document).ready(function() {
    $('#fbloginbtn').click(function(event){ // capture the event
         event.preventDefault(); // handle the event
         $.ajax({
		    url:'localhost/FBLoginProject/fblogin.php', 
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