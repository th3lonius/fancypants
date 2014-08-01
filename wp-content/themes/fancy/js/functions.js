jQuery(document).ready(function($){


/*MENUCONTROLLER*/
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('body > header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('body > header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('body > header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
	
/*SUPERSLIDES*/
$('#slides').superslides({
    play: 5000,
	animation: 'fade',
	animation_speed: 'normal',
    pagination: false,
    inherit_width_from: '.abstract aside',
    inherit_height_from: '.abstract aside'
});
    
    
	$('nav ul li a').hover(function() {
		$(this).addClass("slideUp");
	});
    
    
}); //end ready