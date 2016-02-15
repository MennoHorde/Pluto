$(window).resize(function () {

	//setDIVHeight();

});

$(document).ready( function() {

	//setDIVHeight();

});

function setDIVHeight() {

	var theDiv = $('div#height100');
	var divTop = theDiv.offset().top;
	var winHeight = $(window).height();
	var divHeight = winHeight - divTop;
	theDiv.height(divHeight);

}

// Get id by class
function getId(id) {

	var elementId = $(id).attr('id');
		elementId = elementId.substr(elementId.indexOf("_") + 1);

	return elementId;
}
