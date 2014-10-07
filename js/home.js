
define(['jquery', 'jqueryui'], function($){


//functions to search/filter articles on public pages
//also to provide infinite scroll (by removing pagination)


;HOME = {};
;(function($){

	HOME.init = function(){

		console.log('home init happened');

		$('#join').on('click', function(){
			//show the start form, and hide the join form
			//go to next page
			$('#form_join').show();
			$('#form_add').hide();
			PAGES.showNextPage();
		})

		$('#start').on('click', function(){
			$('#form_join').hide();
			$('#form_add').show();
			PAGES.showNextPage();
		})


	}



})(jQuery);

    $(document).ready(function(){
        HOME.init();
    })

}); //define ends

