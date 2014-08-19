jQuery(document).ready(function($){
    
    if ($(window).width() < 800) {
    
        $('.menu-link').click(function(e){
            var navPos = $('nav').position().left;
            if ( navPos < 0 ) {
                $('nav').animate({
                    left: 0
                });
            } else {
                $('nav').animate({
                    left: '-100%'
                });
            }
        });
        
        /*NAV ANIMATION*/
        $('nav ul li a')
          .mouseenter(function(e) {
              if (e.target === this) {
                $(this).next().addClass('tossing');
              }
          })
          .mouseleave(function() {
            $(this).next().removeClass('tossing');
          });
        
    }
    

    if ($(window).width() > 800) {
        
        /*SUPERSLIDES*/
        $('#slides').superslides({
            play: 5000,
            animation: 'fade',
            animation_speed: 'normal',
            pagination: false,
            inherit_width_from: '.abstract aside',
            inherit_height_from: '.abstract aside'
        });

        /*NAV ANIMATION*/
        $('nav ul li a')
          .mouseenter(function(e) {
              if (e.target === this) {
                $(this).next().fadeIn().addClass('slideDown');
              }
          })
          .mouseleave(function() {
            $(this).next().fadeOut('fast').removeClass('slideDown');
          });


        /*SCROLLING ANIMATION*/

        $(window).scroll(function() {
            $('.buythebook .stitching > *').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+600) {
                    $(this).addClass("slideRight");
                }
            });
        });
        
    }
    
    /*CONTACT FORM AJAX*/
$(function(){
	$('#contact_form').submit(function(e){
		e.preventDefault();
		var form = $(this);
		var post_url = form.attr('action');
		var post_data = form.serialize();

		var submit_form = false;
		var req_fields = $('input[rel=req]');
		var field, pcount = 0;
		req_fields.each(function(){
			field = $(this).val();
			if(field == '' || field == 'Required') {
				$(this).css('border', '1px solid red').val('Required');
				pcount += 1;
			} else {
				$(this).css('border', '1px solid green');
			}
		});

		if(pcount == 0) {
			submit_form = true;
		}

		if(submit_form) {
			$('#loader', form).html('<img src="loader.gif" /> Please Wait...');
			$.ajax({
				type: 'POST',
				url: post_url, 
				data: post_data,
				success: function(msg) {
					$(form).fadeOut(500, function(){
						form.html(msg).fadeIn();
					});
				}
			});
		}
	});
});
	
	

var str=location.href.toLowerCase();
	
$("nav ul li a").each(function() {
if (str.indexOf(this.href.toLowerCase()) > -1) {
 $("a.current").removeClass("current");
$(this).addClass("current");
}
 });


    
    
}); //end ready