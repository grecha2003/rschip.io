const galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 0,
    slidesPerView: 1,
    loop: false
});
const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 0,
    slidesPerView: 4,
    centeredSlides: true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: false
});
galleryTop.controller.control = galleryThumbs;
galleryThumbs.controller.control = galleryTop;