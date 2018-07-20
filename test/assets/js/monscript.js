	$(function() {
  				$('.cbp-af-header').hide();
			});
		
		
        
			$(window).scroll(function(){  
        		posScroll = $(document).scrollTop();  
        		if(posScroll >=69)  
            $('.cbp-af-header').slideDown(450);  
        	else  
            $('.cbp-af-header').slideUp(450);  
    		});  