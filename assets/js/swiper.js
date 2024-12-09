import Swiper from "swiper/bundle";

//wait until images, links, fonts, stylesheets, and js is loaded
window.addEventListener(
  "load",
  () => {
    if ($(".page-template-page-about")[0]) {
      var aboutSwiper = new Swiper(".aboutSwiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 24,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 1.4,
            spaceBetween: 24,
          },
          1200: {
            slidesPerView: 1.4,
            spaceBetween: 24,
          },
        },
      });
    }
    if ($(".page-template-page-solothurn-what-to-do")[0]) {
      var eventSwiper = new Swiper(".eventSwiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        grabCursor: true,
        breakpoints: {
          640: {
            slidesPerView: 1.2,
            spaceBetween: 24,
          },
          768: {
            slidesPerView: 2.2,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 2.2,
            spaceBetween: 24,
          },
          1200: {
            slidesPerView: 3.2,
            spaceBetween: 24,
          },
        },
      });
    }
    if ($(".page-template-page-solothurn-what-to-do")[0]) {
      var activitiesSwiper = new Swiper(".activitiesSwiper", {
        slidesPerView: 1.2,
        spaceBetween: 24,
        grabCursor: true,
        breakpoints: {
          640: {
            slidesPerView: 1.2,
            spaceBetween: 24,
          },
          768: {
            slidesPerView: 1.2,
            spaceBetween: 24,
          },
          1024: {
            slidesPerView: 2.2,
            spaceBetween: 24,
          },
        },
      });
    }
    if ($(".single-zimmer")[0]) {
      var zimmerSwiper = new Swiper(".zimmerSwiper", {
        slidesPerView: 1,
        loop: true,
        navigation: {
          nextEl: ".zimmerSwiper-button-next",
          prevEl: ".zimmerSwiper-button-prev",
        },
      });
    }
  },
  false
);
