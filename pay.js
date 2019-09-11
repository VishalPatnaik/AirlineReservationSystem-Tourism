/* fix to enable click to show dropdown on custom icon */

$(document).on('click', '.select-icon', function(){
	var selectId = $(this).siblings('.options');
	open(selectId);
});


function open(elem) {
    if (document.createEvent) {
        var e = document.createEvent("MouseEvents");
        e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        elem[0].dispatchEvent(e);
    } else if (element.fireEvent) {
        elem[0].fireEvent("onmousedown");
    }
}

/* next view button */
$('.next').on('click', function() {
	
	$('#flip-toggle').addClass('hover');
	$(this).attr('disabled', true);
	$('.prev').removeAttr('disabled');
	
});


/* prev view button */
$('.prev').on('click', function() {
	
	$('#flip-toggle').removeClass('hover');
	$(this).attr('disabled', true);
	$('.next').removeAttr('disabled');
	
});