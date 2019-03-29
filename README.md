# Modaal for Divi

Modaal for Divi is a WordPress plugin set up for the [Divi Wordpress theme](https://www.elegantthemes.com/gallery/divi/). Modaal is a WCAG 2.0 Level AA accessible modal (aka lightbox, overlay, or popup dialog window) library by [Humaan](http://www.humaan.com/modaal/).  Modaal's orginal scripts and css files are enqueued via a CDN, and triggers are initialized in a separate script file.

Modaal for Divi initializes the following modal types: inline content, video, and single image.

## Installation
1. Download ZIP
2. Upload the zip file through your Divi site's plugins page
2. Activate the plugin

## Configuration

Modaal for Divi initalializes the following triggers: 

    $('.modaal-inline-trigger, .modaal-inline-trigger-wrapper a').modaal({
    	type: 'inline'
    });

	$('.modaal-video-trigger, .modaal-video-trigger-wrapper a').modaal({
		type: 'video'
	});

	$('.modaal-image-trigger, .modaal-image-trigger-wrapper a').modaal({
		type: 'image'
	});

In general, triggers can be configured with any link element in two ways: 

1. Add the trigger class to the link element:
```html 
<a href="#modaal-inline-content" class="modaal-inline-trigger">Show</a>
```

2. Add the trigger-wrapper class to a parent of the link element:  
	```html
	<div class="modaal-inline-trigger-wrapper">   
		<a href="#modaal-inline-content">Show</a>
	</div>
	```

Instructions for creating triggers with the Divi Builder are included below. 

### Video Modals

#### Embed URLs

YouTube and Vimeo embeds are supported. For both video hosts, ensure the embed URL is used. This can be found by selecting 'Share', then clicking 'Embed'. The correct URL is inside the `src=""` attribute.

- YouTube embed URL example: `https://www.youtube.com/embed/XXXXXXXXXXX` where the 11 digit ID at the end of the URL is your unique video ID.  
- Vimeo embed URL example: `https://player.vimeo.com/video/XXXXXXXXX` where the ID at the end of the URL is your unique video ID.

#### Video Modal Triggers in a Divi Image Module

1.  In the Content tab, add the video embed URL in the Image Link URL field. 
2.  In the Advanced tab, add `modaal-video-trigger-wrapper` to the CSS Class. Remember to include alt text that is descriptive of the image purpose (ie, "play video in modal window" ).

#### Video Modal Triggers in a Divi Button Module 

1.  In the Content tab, add the video embed URL in the Button Link URL field. 
2.  In the Advanced tab, add `modaal-video-trigger` to the CSS Class.

### Image Modals

Divi has a 'open image in lightbox' feature built into the image module, but it is lacking appropriate aria attributes for screen reader accessibility.

#### Image Modal Trigger in a Divi Image Module

1.  In the Content tab, add the Image URL in the Image Link URL field. Ensure 'Open in Lightbox' is turned off. 
2.  In the Advanced tab, add `modaal-image-trigger-wrapper` to the CSS Class. Remember to include alt text that is descriptive of the image purpose (ie, "open image in modal window" ).

### Inline Content Modals

Fetches content using the ID of a hidden element in the page and loads it into the modal window. 

1.  Create a Divi module for your hidden content and add CSS ID `modaal-inline-content` to the Divi Builder Advanced settings tab. If more than one inline modal is needed on a page, the CSS ID can be suffixed with a unique number, like so: `modaal-inline-content-1` `modaal-inline-content-2`
2.  Create the modal trigger with a Button or Image module. Use the unique ID from step 1 for the image/button URL. Be sure to inlcude the hash in front, like so: `#modaal-inline-content` 
  * For Button Modules, add `modaal-inline-trigger` to the CSS Class in the Advanced tab. 
  * For Image Modules, add `modaal-inline-trigger-wrapper` to the CSS Class in the Advanced tab. 

### Need other Modal types? 

The Modaal library also includes configuration options for ajax, iframe, confirm, and instagram modal types. Initialize them with the configuration options of your choice by adding the .modaal() function call to Divi Theme Options > Integrations > Add code the the body 