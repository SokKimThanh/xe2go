/* CREATED DATE 21/12/2024 */
/* AUTHOR Sok Kim Thanh */
/* Summary code for owl.carousel slider */


// 
/* Section main slider */
// 
$('.mainSlider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        '<i class="bi bi-arrow-left" aria-hidden="true"></i>',
        '<i class="bi bi-arrow-right" aria-hidden="true"></i>'
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})



//
/* section vfo */
// 

var owl = $('.box-slider');

owl.owlCarousel({
    loop: true,
    auto: true,
    margin: 30,
    dots: true,
    // auto play
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
})

function play() {
    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [1000])
    })
}
play();

$('.stop').on('click', function () {
    owl.trigger('stop.owl.autoplay')
})


//
/* section vi sao chon chung toi */
// 
const section_visaochonchungtoi = document.querySelector('#halini-slider');
if (section_visaochonchungtoi) {

    var section_mobile_line_container = section_visaochonchungtoi.querySelector(".mobile");

    var owl = $(".line-item-slider");

    owl.owlCarousel({
        loop: true,
        auto: true,
        margin: 30,
        dots: true,
        // auto play
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            }
        }
    })
}

//
/* section sixbox slider logo xe*/
// 

var owl = $('.logo-xe-slider');

owl.owlCarousel({
    loop: true,/* Tạo cloned nhưng bị diệt bởi css. true/false gì cũng điều hướng quay lại phần tử đầu tiên */
    rewind: true,/* kích hoạt khi loop là false: cho phép quay lại vi trí đầu tiên */
    rewindNav: true,/* Tự quay về vị trí đầu tiên khi về cuối */
    margin: 0,
    dots: true,
    // auto play 
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,

    responsive: {
        0: { items: 2, nav: false }
    }
})

//
/* section slider thành tựu đạt được*/
// 

var owl = $('.achivement-slider');

owl.owlCarousel({
    loop: true,
    auto: true,
    margin: 4,
    dots: true,
    // auto play
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        }
    }
})

//
/* section sixbox slider logo xe*/
// 

var owl = $('.vision-mission-values-slider');

owl.owlCarousel({
    loop: true,
    auto: true,
    margin: 4,
    dots: true,
    // auto play
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        }
    }
})

var owl = $('.insurances-slider');

owl.owlCarousel({
    loop: true,/* Tạo cloned nhưng bị diệt bởi css. true/false gì cũng điều hướng quay lại phần tử đầu tiên */
    rewind: true,/* kích hoạt khi loop là false: cho phép quay lại vi trí đầu tiên */
    rewindNav: true,/* Tự quay về vị trí đầu tiên khi về cuối */
    margin: 0,
    dots: true,
    // auto play 
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,

    responsive: {
        0: { items: 2, nav: false }
    }
})