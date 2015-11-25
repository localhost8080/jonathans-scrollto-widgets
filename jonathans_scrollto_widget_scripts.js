// javascripts
$(document).ready(
    function() {
        if ($('.jonathans-scrollto-widget').length) {
            $('body').append('<ul class="jonathans-scrollto-widget-holder">');
            $('.jonathans-scrollto-widget-holder').append(
                '<li><a href="#'
                + index
                + '"><span class="fa fa-circle"></span><span class="title">Top</span></a></li>');

            $(".jonathans-scrollto-widget").each(
                function(index, elem) {
                    elem.id = "scrollto" + index;
                    $('.jonathans-scrollto-widget-holder').append(
                        '<li><a href="#scrollto'
                        + index
                        + '"><span class="fa fa-circle"></span><span class="title">'
                        + $(this).data('src')
                        + '</span></a></li>');
            });

            $('a[href^="#"]').on('click', function(event) {

                var target = $($(this).attr('href'));

                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop : target.offset().top
                    }, 1000);
                }

            });
        }

});