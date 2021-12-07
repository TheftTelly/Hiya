$('.slick-wrapper').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: false,
    infinite: true,
    responsive: [
        {
            breakpoint: 1080,
            settings: {
                slidesToScroll: 4,
                slidesToShow: 4,
            },


        },
        {
            breakpoint: 760,
            settings: {
                slidesToScroll: 3,
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToScroll: 2,
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 400,
            settings: {
                slidesToScroll: 1,
                slidesToShow: 1,
            },
        }
    ],

});

const a = document.querySelector('.header__burger');
const b = document.querySelector('.menu');
a.onclick = function () {
    b.classList.toggle('menu--active');
}

