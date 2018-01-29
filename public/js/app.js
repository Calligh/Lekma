$(document).ready(() => {
	var baseName   = ["Lekma"];
	var titleArray = ["Home","Lessons","Register","About Us","FAQ","Topics"];

	var getURl = window.location.href,
		subPath = getURl.split("/"),
		getLastPath = subPath[subPath.length - 1];

		switch(getLastPath)
		{
			case "dashboard":
				document.title = baseName[0] + " | " + titleArray[0];
				break;
			case "lessons":
				document.title = baseName[0] + " | " + titleArray[1];
				break;
			case "register":
				document.title = baseName[0] + " | " + titleArray[2];
				break;
			case "about_us":
				document.title = baseName[0] + " | " + titleArray[3];
				break;
			case "faq":
				document.title = baseName[0] + " | " + titleArray[4];
				break;

			default:
				document.title = baseName[0] + " | " + titleArray[0];
				break;

		}
		$('a.brand-logo').text(baseName);
		
	//Configurations for the li-> a -> href activeness of the sidenav
	//activating the active click events
    $("ul.nav-demo a").on('click',function(e){
    	var link = $(this);
    	var item = link.parent("li");

    	if (item.hasClass("active"))
    	 {
    	 	item.removeClass("active").children("a").removeClass("active");
    	 }
    	 else{
    	 	item.addClass("active").children("a").addClass("active");
    	 }

    	 if (item.children("ul").length > 0) 
    	 {
    	 	var href = link.attr("href");
    	 	link.attr("href","#");
    	 	setTimeout(function() {
    	 		link.attr("href",href);
    	 	}, 300);
    	 	e.preventDefault();
    	 }

    })
    .each(function(){
    	var link = $(this);
    	if (link.get(0).href == location.href)
    	 {
    	 	link.addClass("active").parents("li").addClass("active");
    	 	return false;
    	 }
    });


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

	//Configuring the search bar
	$("input#search_data").focusin(function(){
		 $("input#search_data").css({"background":"#FFFFFF","transition":"all 0.5s ease-in-out"});
		 $("i.search_icon").css({"transition":"all 0.5s ease-in-out","color":"#212121"});
	});
	$("input#search_data").focusout(function(){
		 $("input#search_data").css({"background":"#0288d1","transition":"all 0.5s ease-in-out"});
		 $("i.search_icon").css({"transition":"all 0.5s ease-in-out","color":"#FFFFFF"});
	});
 	$(document).on('click', '#toast-container .toast', function() {
	    $(this).fadeOut(function(){
	        $(this).remove();
	    });
	});

	var jets = new Jets({
 		searchTag:'#search_data',
 		contentTag:'#jetsContent'
 	});

 	$(".modal").modal({
 		opacity:0.2,
 		dismissible:false,
 		ready:function(){
 			$(".tabs").tabs();
 		}
 	});

 	//activating the loaders
 	$("#main-container,#btn-float").hide();
 	$("#lazy-loader").addClass("animated fadeIn").show();

 	setTimeout(function() {
 		$("#main-container,#btn-float").addClass("animated fadeIn").show();
 		$("#lazy-loader").addClass("animated fadeOut").hide();
 	}, 3000);
});