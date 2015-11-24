// javascripts

$('body').append('<div class="jonathans-scrollto-widget-holder">');

$(".jonathans-scrollto-widget").each(function(index, elem){
	elem.id = "scrollto" + index;
	// add an index to the new list
	$('.jonathans-scrollto-widget-holder').append('<a href="#scrollto' + index'">here</a>')
})
