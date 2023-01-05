

$('.funding-contributors1').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.funding-contributors1').on('afterChange', function () {
    console.log($('.funding-contributors1').slick('slickCurrentSlide'));
    var currentSlide = $('.funding-contributors1').slick('slickCurrentSlide');
    if (currentSlide == 0) {
        $('.funding-contributors1 .slick-prev').hide();
        $('.funding-contributors1 .slick-next').show();
    }
    else if (currentSlide == 8) {
        $('.funding-contributors1 .slick-next').hide();
        $('.funding-contributors1 .slick-prev').show();
    }

    if (currentSlide > 0 && currentSlide < 8) {
        $('.funding-contributors1 .slick-prev').show();
        $('.funding-contributors1 .slick-next').show();
    }

});

$(document).ready(function () {
    var currentSlide = $('.funding-contributors1').slick('slickCurrentSlide');
    if (currentSlide == 0) {
        $('.funding-contributors1 .slick-prev').hide();
    }
    else if (currentSlide == 8) {
        $('.funding-contributors1 .slick-next').hide();
    }

});



$('.our-partner-slide').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                dots: false,
                speed:300
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                dots: false,
                speed:300
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.our-partner-slide').on('afterChange', function () {
    console.log($('.our-partner-slide').slick('slickCurrentSlide'));
    var currentSlide = $('.our-partner-slide').slick('slickCurrentSlide');
    if (currentSlide == 0) {
        $('.our-partner-slide .slick-prev').hide();
        $('.our-partner-slide .slick-next').show();
    }
    else if (currentSlide == 8) {
        $('.our-partner-slide .slick-next').hide();
        $('.our-partner-slide .slick-prev').show();
    }

    if (currentSlide > 0 && currentSlide < 8) {
        $('.our-partner-slide .slick-prev').show();
        $('.our-partner-slide .slick-next').show();
    }

});

$(document).ready(function () {
    var currentSlide = $('.our-partner-slide').slick('slickCurrentSlide');
    if (currentSlide == 0) {
        $('.our-partner-slide .slick-prev').hide();
    }
    else if (currentSlide == 8) {
        $('.our-partner-slide .slick-next').hide();
    }

});


$('.advisor-slider').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
$('.advisor-slider1').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});

$('.advisor-slider2').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});




$('button[role="tab"]').on('shown.bs.tab', function (e) {
    console.log("innnnnnnnn");
    $('.advisor-slider').slick('setPosition');
    $('.advisor-slider1').slick('setPosition');
    $('.advisor-slider2').slick('setPosition');
})
$(document).ready(function () {
    var currentSlide1 = $('.advisor-slider').slick('slickCurrentSlide');
    var currentSlide2 = $('.advisor-slider1').slick('slickCurrentSlide');
    var currentSlide3 = $('.advisor-slider2').slick('slickCurrentSlide');
    /*   
       if (currentSlide1 == 0) {
           $('.advisor-slider .slick-prev').hide();
       }
       else if (currentSlide1 == 6) {
           $('.advisor-slider .slick-next').hide();
       }

       if (currentSlide1 == 0) {
           $('.advisor-slider .slick-prev').hide();
       }
       else if (currentSlide == 6) {
           $('.advisor-slider .slick-next').hide();
       }

       if (currentSlide1 == 0) {
           $('.advisor-slider .slick-prev').hide();
       }
       else if (currentSlide == 6) {
           $('.advisor-slider .slick-next').hide();
       }
       */
});

        // $('.advisor-slider').on('afterChange', function () {
        //     console.log($('.advisor-slider').slick('slickCurrentSlide'));
        //     var currentSlide = $('.advisor-slider').slick('slickCurrentSlide');
        //     if (currentSlide == 0) {
        //         $('.advisor-slider .slick-prev').hide();
        //         $('.advisor-slider .slick-next').show();
        //     }
        //     else if (currentSlide == 6) {
        //         $('.advisor-slider .slick-next').hide();
        //         $('.advisor-slider .slick-prev').show();
        //     }

        //     if (currentSlide > 0 && currentSlide < 6) {
        //         $('.advisor-slider .slick-prev').show();
        //         $('.advisor-slider .slick-next').show();
        //     }

        // });

        // $(document).ready(function () {
        //     var currentSlide = $('.advisor-slider').slick('slickCurrentSlide');
        //     if (currentSlide == 0) {
        //         $('.advisor-slider .slick-prev').hide();
        //     }
        //     else if (currentSlide == 6) {
        //         $('.advisor-slider .slick-next').hide();
        //     }

        // });


        $('.volunteer').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        
        $('.volunteer').on('afterChange', function () {
            console.log($('.volunteer').slick('slickCurrentSlide'));
            var currentSlide = $('.volunteer').slick('slickCurrentSlide');
            if (currentSlide == 0) {
                $('.volunteer .slick-prev').hide();
                $('.volunteer .slick-next').show();
            }
            else if (currentSlide == 20) {
                $('.volunteer .slick-next').hide();
                $('.volunteer .slick-prev').show();
            }
        
            if (currentSlide > 0 && currentSlide < 20) {
                $('.volunteer .slick-prev').show();
                $('.volunteer .slick-next').show();
            }
        
        });
        
        $(document).ready(function () {
            var currentSlide = $('.volunteer').slick('slickCurrentSlide');
            if (currentSlide == 0) {
                $('.volunteer .slick-prev').hide();
            }
            else if (currentSlide == 20) {
                $('.volunteer .slick-next').hide();
            }
        
        });


        $('.blogslider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }               
            ]
        });
        
        $('.blogslider').on('afterChange', function () {
            console.log($('.blogslider').slick('slickCurrentSlide'));
            var currentSlide = $('.blogslider').slick('slickCurrentSlide');
            if (currentSlide == 0) {
                $('.blogslider .slick-prev').hide();
                $('.blogslider .slick-next').show();
            }
            else if (currentSlide == 2) {
                $('.blogslider .slick-next').hide();
                $('.blogslider .slick-prev').show();
            }
        
            if (currentSlide > 0 && currentSlide < 2) {
                $('.blogslider .slick-prev').show();
                $('.blogslider .slick-next').show();
            }
        
        });
        
        $(document).ready(function () {
            var currentSlide = $('.blogslider').slick('slickCurrentSlide');
            if (currentSlide == 0) {
                $('.blogslider .slick-prev').hide();
            }
            else if (currentSlide == 2) {
                $('.blogslider .slick-next').hide();
            }
        
        });


        $('.videoslide').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }               
            ]
        });
        
        $('.videoslide').on('afterChange', function () {
            console.log($('.videoslide').slick('slickCurrentSlide'));
            var currentSlide = $('.videoslide').slick('slickCurrentSlide');
            if (currentSlide == 0) {
                $('.videoslide .slick-prev').hide();
                $('.videoslide .slick-next').show();
            }
            else if (currentSlide == 2) {
                $('.videoslide .slick-next').hide();
                $('.videoslide .slick-prev').show();
            }
        
            if (currentSlide > 0 && currentSlide < 2) {
                $('.videoslide .slick-prev').show();
                $('.videoslide .slick-next').show();
            }
        
        });
        
        $(document).ready(function () {
            var currentSlide = $('.videoslide').slick('slickCurrentSlide');
            if (currentSlide == 0) {
                $('.videoslide .slick-prev').hide();
            }
            else if (currentSlide == 2) {
                $('.videoslide .slick-next').hide();
            }
        
        });


        
$('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//    autoplay:true,
//     nav:true,
autoplay: true,
    /*center: true,*/
    loop: true,
    infinite:true,
    nav: false,
    // rtl: true,
    dots:false,
    items: 4,
    autoplayTimeout:2000,
autoplayHoverPause:true,
    responsive:{
        0:{
            items: 1,
            navigation: true,
            nav: true,
            slideBy: 1 
        },
        600:{
            items: 3,
        navigation: true,
        nav: true,
        slideBy: 2 
        },
        1000:{
            items: 3,
        navigation: true,
        nav: true,
        slideBy: 3
        }
    }
})

