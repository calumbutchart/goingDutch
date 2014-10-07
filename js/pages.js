
define(['jquery', 'jqueryui'], function($){


//functions to search/filter articles on public pages
//also to provide infinite scroll (by removing pagination)


;PAGES = {};
;(function($){

	PAGES.init = function(){

		console.log('init happened');

		$('#home_submit').on('click', function(){
			PAGES.showNextPage();
			console.log('clicked');
		})

		$("body").keydown(function(e) {
		  if(e.keyCode == 37) { // left
		  	PAGES.showNextPage();
		  }
		  else if(e.keyCode == 39) { // right
		  	PAGES.showPrevPage();
		  }
		});

	}

	PAGES.showNextPage = function(){
		var $currentPage = $('.page.current');
		var $nextPage = $currentPage.next('.page');
		if($nextPage.length){
			$currentPage.removeClass('current').addClass('previous');
			$nextPage.addClass('current');
		}
	}

	PAGES.showPrevPage = function(){
		var $currentPage = $('.page.current');
		var $prevPage = $currentPage.previous('.page');
		if($prevPage.length){
			$currentPage.removeClass('current');
			$prevPage.removeClass('previous').addClass('current');
		}
	}



})(jQuery);

    $(document).ready(function(){
        PAGES.init();
    })

}); //define ends

