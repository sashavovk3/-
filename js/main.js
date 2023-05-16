/* navigarion */
$(window).load(function(){
  $('.header').liLanding({
    topMargin: 96 
  });
})

$('.logo').click(function() {
    $('html, body').animate({scrollTop: 0},500);
    return false;
})

/* responsive */
$(document).ready(function(){
    /* menu toggle */
    $('.menu-icon').click(function(){
        $(this).toggleClass('active');
        $('.nav').toggleClass('active');
    });
    $('.nav li a').click(function(){
        $('.menu-icon').removeClass('active');
        $('.nav').removeClass('active');
    });
});

/* services */
$('.modal_btn-3').click(function(){
    var modal__name = $(this).text();
    $('.modal-hidden_input-3').val(modal__name);
    $('.modal-form-head').text(modal__name);
});

/* min-height */
$('.services-item__title').matchHeight({ property: 'min-height' });
$('.reviews-item').matchHeight({ property: 'min-height' });
$('.qwewqeqq').matchHeight({ property: 'min-height' });

/* slider SLICK */
$('.cases-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 100,
    slidesToShow: 1,
    slidesToScroll: 1
});
$('.reviews-slider').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 100,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});