const productRsControlsImgGallaryThumbs = new Swiper('.productRsControlsImgGallary-thumbs', {
    spaceBetween: 0,
    slidesPerView: 5,
    // autoplay: {
    //   delay: 1500,
    //   autoplayDisableOnInteraction: false,
    //   pauseOnMouseEnter: true,
    // },
    // autoHeight: true,
    // height: 10,
    noSwiping: false,
    freeMode: true,
    watchSlidesProgress: true,
    // centeredSlides: true,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: false,
    direction: 'vertical',
    // centeredSlides: true,
    // watchOverflow: true,
    
   
});

const productRsControlsImgGallary = new Swiper('.productRsControlsImgGallary', {
    spaceBetween: 0,
    slidesPerView: 1,
      autoplay: {
      delay: 1500,
      disableOnInteraction: false,
      pauseOnMouseEnter: false,
    },
    loop: false,
    thumbs: {
        swiper: productRsControlsImgGallaryThumbs,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
});

// const productRsControlsToggelsItems = document.querySelectorAll('.productRsControlsToggelsItem');

// if(productRsControlsToggelsItems){
//     productRsControlsToggelsItems.forEach((item)=>{
//         item.addEventListener('click', function(e){
//             console.log(this);
//             console.log(e);
//             e.target.
//         })
//     })
// }