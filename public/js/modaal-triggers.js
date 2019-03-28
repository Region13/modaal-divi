jQuery(document).ready(function( $ ) {
	$('[id^="modaal-inline-content"]').css("display", "none");

	$('.modaal-inline-trigger, .modaal-inline-trigger-wrapper a').modaal();

	$('.modaal-video-trigger, .modaal-video-trigger-wrapper a').modaal({
		type: 'video'
	});

	$('.modaal-image-trigger, .modaal-image-trigger-wrapper a').modaal({
		type: 'image'
	});

  
	
});