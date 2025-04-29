var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1, // Default number of slides visible for large screens
  spaceBetween: 30, // Space between slides
  slidesPerGroup: 1, // Number of slides to move at a time
  // loop: true, 
  loopedSlides: 6, 
  pagination: {
    el: ".swiper-pagination1",
    clickable: true, // Enable clickable pagination
  },
  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1",
  },
  
  // breakpoints: {
  //   1024: {
  //     slidesPerView: 3, // 3 slides for large screens
  //     slidesPerGroup: 3,
  //   },
  //   768: {
  //     slidesPerView: 2, // 2 slides for tablets
  //     slidesPerGroup: 2,
  //   },
  //   568: {
  //     slidesPerView: 1, // 1 slide for mobile phones
  //     slidesPerGroup: 1,
  //   },
  // },
});
