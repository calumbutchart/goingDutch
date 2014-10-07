
define(['jquery', 'jqueryui'], function($){


//functions to search/filter articles on public pages
//also to provide infinite scroll (by removing pagination)


;TIP = {};
;(function($){

	TIP.init = function(){

		var $tipSlider = $('#tip_slider');
		var $percent = $('#percent');
		var pMax = 20;

		$('#tip').on('mousedown', function(){
			//get the page height
			var pageHeight = $(window).height();
			console.log('yesss');
			$('#tip').on('mousemove', function(event){
				//get the mouse position as a percentage
				var yPos = parseInt( 100 - (event.pageY * 100 / pageHeight) );
				//update the tip_slider
				$tipSlider.css('height', yPos + '%');
				$percent.text( (yPos * pMax / 100) + '%');

			})

			$('body').on('mouseup', function(){
				$('#tip').off('mousemove');
			})

		})

	}


})(jQuery);

    $(document).ready(function(){
        TIP.init();
    })

}); //define ends

