$(document).ready(function(){
	// $('.dropdown-button').dropdown({
 //      inDuration: 300,
 //      outDuration: 225,
 //      hover: true, // Activate on hover
 //      gutter: 1, // Spacing from edge
 //      belowOrigin: true, // Displays dropdown below the button
 //      alignment: 'left', // Displays dropdown with edge aligned to the left of button
 //      stopPropagation: false // Stops event propagation
 //    }
 //  );

 	$('#login').modal();
 	$('#signup').modal();

 	$("a#hasLogin").on('click',function(){
 		$('#signup').modal('close');
 	});
 	$("a#hasSignup").on('click',function(){
 		$('#login').modal('close');
 	});

 	$("input#search").focusin(function(){
 		$(this).css({"border":"0.5px solid white !important"});
 	});
 	$("input#search").focusout(function(){
 		$(this).css({"border":"0.5px solid #304ffe"});
 	});

 	$(document).on('click', '#toast-container .toast', function() {
	    $(this).fadeOut(function(){
	        $(this).remove();
	    });
	});
});