const swiperModalGallary = new Swiper('.modalGallary .swiper', {
    // Optional parameters
  
    loop: false,

    // Default parameters
    slidesPerView: 1,
    spaceBetween: 0,

    // Navigation arrows
    navigation: {
        prevEl: '.modalGallary .btnSlider.prev',
        nextEl: '.modalGallary .btnSlider.next',
       
    },

});