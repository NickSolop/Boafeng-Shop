$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '/images/loading.gif',
				play: 3000,
				pause: 1500,
				hoverPause: true,
				animationStart: function(){
					$('.caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log(current);
					};
				}
			});
		});