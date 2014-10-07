
define(['jquery', 'jqueryui'], function($){


//functions to search/filter articles on public pages
//also to provide infinite scroll (by removing pagination)


;GRID = {};
;(function($){

	GRID.init = function(){

		$gridTable = $('#grid>table');
		//click / touch events

		//squares can be empty, taken(someone else), and selected (this user)

	}

	//swipe /mousedown between 2 squares
	//on mouseup

    var pos1x, pos1y;
    var pos2x, pos2y;
    var add = true;
    var user = 'user1',
        userList = ['user2', 'user3', 'user4'];

    $('.square:not(.taken)').on( 'mousedown', function(){

        console.log($(this));

        if($(this).find('input').prop('checked')){
            add = false;
        }else{
            add = true;
        }

        pos1x = $(this).data('x');
        pos1y = $(this).data('y');
        pos2x = pos1x;
        pos2y = pos1y;
        // pos2 = $(this);
        updateSelected();

        // // $('body').on('mousemove', function(){
            $('.square').on('mouseenter', function(){
                pos2x = $(this).data('x');
                pos2y = $(this).data('y');
                updateSelected();
            })
        // // })

        $('body').on('mouseup', function(){
            $('body').off('mouseup');
            $('.square').off('mouseenter');
             updateSelectedFinal();
        });
    })

    $("body").keydown(function(e) {
        if (e.keyCode == 32) { // spacebar
            userList.push(user);
            user = userList.shift();  
        }
    });

    updateSelected = function(){
        //need to iterate through all squares within this range
        // console.log(pos1x + ' ' + pos1y + ' ' + pos2x + ' ' + pos2y);
        var smallestX = Math.min(pos1x, pos2x);
        var largestX = Math.max(pos1x, pos2x);
        var smallestY = Math.min(pos1y, pos2y);
        var largestY = Math.max(pos1y, pos2y);

        for (var x = smallestX; x <= largestX; x++) {
            for (var y = smallestY; y <= largestY; y++) {
                var $inpt = $('#' + x + '-' + y);
                if(add){
                    $('#' + x + '-' + y).addClass('selected');
                }else{
                    $('#' + x + '-' + y).addClass('deselected');
                }
                // updateSquare( $('#' + x + y) );
            };
        };

    }

    updateSelectedFinal = function(){
        console.log(pos1x + ' ' + pos1y + ' ' + pos2x + ' ' + pos2y);
        //need to iterate through all squares within this range
        $gridTable.find('.selected').removeClass('selected').prop('checked', true).next().removeAttr('class').addClass(user);
        $gridTable.find('.deselected').removeClass('deselected').prop('checked', false).next().removeAttr('class').removeClass(user);;
    }

    updateSquare = function($square){
        console.log('yep');
        if(!$square.hasClass('taken')){
            $square.addClass('selected');
        }
    }


})(jQuery);

    $(document).ready(function(){
        GRID.init();
    })

}); //define ends

