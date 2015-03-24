$(document).ready(function(){

	//Reg expression to detect if a link (a tag) has just an id in it rather than a link to a page.
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();
	});

    $("#login-button").click(function() {
	    if($(".signup-box").is(":visible")) {
			$(".signup-box").slideToggle();
	    }
        $(".login-box").slideToggle();
    });

    $("#signup-button").click(function() {
	    if($(".login-box").is(":visible")) {
			$(".login-box").slideToggle();
	    }
        $(".signup-box").slideToggle();
    });

    $("#dismiss").click(function() {
        $(".message-box").slideUp();
    });

});