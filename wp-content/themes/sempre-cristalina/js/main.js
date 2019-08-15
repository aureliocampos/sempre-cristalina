$('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 0
    }, 500);
});

$('.menu-response').on('click', function(){
    $('.menu-desk').toggleClass('active');
    $(this).toggleClass('active', 'slow');
})


