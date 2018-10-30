jQuery(document).ready(function($) {
	var loader = $('#loader-status').val();
	if (loader == 1) {
		$('body').css({"height": "100%", "overflow": "hidden"})
		$(window).load(function() {
			// Animate loader off screen
			$('body').removeAttr("style");
			$(".se-pre-con").fadeOut("slow");
		});
	}
	//goto top
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	}); 
	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);
		return false;
	});	

    // $("[data-fancybox]").fancybox({
    // 	loop : true,
    // });
    $(".lazy").Lazy();
    $(window).load(function(){
		$(".sticky_menu").sticky({ topSpacing: 0 });
	});
	new WOW().init();
});
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}