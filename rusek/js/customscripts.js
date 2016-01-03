//Custom scripts 
//Kamil Rusek 
//2015

$(function initial() {
	
	resizeBanner();
	
	$( window ).resize(function() {
	  resizeBanner();
	});
     
     $('#paralaxBG').parallax({imageSrc: 'img/mainBaner.jpg'});
	 	 
 });

	
$(function MobileNavi() 
{
	$('.navibutton, #hamburger').on( "click", function(e) 
	{
		
		if($('#hamburger:visible').hasClass("active")) 
		{
			$('#hamburger:visible').removeClass("active");
			$('nav').animate({height: "hide"}, 400);
		}
		else
		{
			$('#hamburger:visible').addClass("active");
			$('nav').animate({height: "show"}, 400);
		}
	});
		
	$( window ).resize(function() 
	{
		if(!$('#hamburger').is(":visible"))
		{
			$('nav').show();
		}
		else
		{
			$('nav').hide();
			$('#hamburger:visible').removeClass("active");
		}
	});		
});

function scrollNavi(headerId)
{
	if(headerId == "top")
	{
		$('html,body').animate({scrollTop: 0}, 500);
	}
	else
	{
		$('html,body').animate({scrollTop: $('#' + headerId).offset().top - $('header').height()}, 500);
	}		
}

function resizeBanner(){
		var windowH = $(window).height();         
	if(windowH*0.6 > 600){
		$('#baner, #paralaxBG').css({'height':windowH*0.6 +'px'});
	}else{
		$('#baner, #paralaxBG').css({'height': '600px'});
	}
}

	  
