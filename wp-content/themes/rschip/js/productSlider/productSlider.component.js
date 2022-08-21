const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
    // centeredSlides: true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: false,
   
});

const galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 0,
    slidesPerView: 1,
    loop: false,
    thumbs: {
        swiper: galleryThumbs,
    },
    navigation: {
        nextEl: '.js--swiper-button-next',
        prevEl: '.js--swiper-button-prev',
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
});
