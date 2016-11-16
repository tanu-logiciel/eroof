$( document ).ready(function() {
	$('.color-border').addClass("color-border").viewportChecker({
        classToAdd: 'color-border-slide animated ease',
        offset: 100
    });


	// $('.slide-container').mousemove(function(e){
	// 	console.log("yes");
	//     var amountMovedX = (e.pageX * -1 / 300);
	//     var amountMovedY = (e.pageY * -1 / 300);
	//     // $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
	//     $(this).css({
	//     	'background-position' : 'auto !important',
	//     	'background-position' : amountMovedX + 'px ' + amountMovedY + 'px',
	//     })
	// });
	if ($(window).width() < 768) {
	   $('.phone-section').removeAttr( "id" );
	}
	else {
	   console.log("not removed");
	}
});

