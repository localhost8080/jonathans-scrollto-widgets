// javascripts
$(document).ready(
		function() {
			$('body').append('<ul class="jonathans-scrollto-widget-holder">');

			$(".jonathans-scrollto-widget").each(
					function(index, elem) {
						elem.id = "scrollto" + index;
						// add an index to the new list
						$('.jonathans-scrollto-widget-holder').append(
								'<li><a href="#scrollto' + index
										+ '">here</a></li>');
					});
		});