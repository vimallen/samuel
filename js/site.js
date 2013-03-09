
	jQuery(document).ready(function($) {

		// Your JavaScript goes here
		/* $('.ngg-gallery-thumbnail-box').addClass('box_rotate_clockwise') */

		$("div.ngg-galleryoverview img").each( function() {
  var rNum = (Math.random()*6)-2;  
  $(this).css( {   
    '-webkit-transform': 'rotate('+rNum+'2deg)',
    '-moz-transform': 'rotate('+rNum+'2deg)'  
  } );  
} );


	});

