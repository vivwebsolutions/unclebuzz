//***************************** Lightbox *****************************//


jQuery(document).ready(function(){
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({
		theme: "dark_square"
	});
});


//***************************** Menu *****************************//


function mainmenu(){
	jQuery("#nav ul li a").removeAttr("title");
	jQuery("#nav ul a").removeAttr("title");
	jQuery("#nav ul ul ").css({display: "none"}); // Opera Fix
	jQuery("#nav ul li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).show(400);
		},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
		});
}
 
jQuery(document).ready(function(){					
	mainmenu();
});


//***************************** Collapsible Content *****************************//


animatedcollapse.addDiv('slide-box', 'fade=1,height=305px')
animatedcollapse.ontoggle=function($, divobj, state){}
animatedcollapse.init()


/*************************** Contact Form ***************************/


jQuery(document).ready(function(){
	
	jQuery('#contactform').submit(function(){
	
		var action = jQuery(this).attr('action');
		
		jQuery("#message").slideUp(750,function() {
		jQuery('#message').hide();
		
 		jQuery('#submit')
			.after('<div class="loader"> </div>')
			.attr('disabled','disabled');
		
		jQuery.post(action, { 
			name: jQuery('#name').val(),
			email: jQuery('#email').val(),
			subject: jQuery('#subject').val(),
			comment_box: jQuery('#comment_box').val(),
			verify: jQuery('#verify').val()
		},
			function(data){
				document.getElementById('message').innerHTML = data;
				jQuery('#message').slideDown('slow');
				jQuery('#contactform div.loader').fadeOut('slow',function(){jQuery(this).remove()});
				jQuery('#contactform #submit').attr('disabled',''); 
				if(data.match('success') != null) jQuery('#contactform').slideUp('slow');
				
			}
		);
		
		});
		
		return false; 
	
	});
	
});