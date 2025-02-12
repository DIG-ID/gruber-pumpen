import Swiper from "swiper/bundle";

//wait until images, links, fonts, stylesheets, and js is loaded
window.addEventListener(
  "load",
  () => {
    if ( $(".page-template-page-home")[0] || $(".post-type-archive-eigenprodukte")[0] ) {
      var productSlider = new Swiper(".products-slider", {
        slidesPerView: 1.5,
        spaceBetween: 20,
        navigation: {
            nextEl: '.products-swiper-button-next',
            prevEl: '.products-swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 3,
            }
        }
      });
    }
    if ($(".page-template-page-about")[0]) {
      var aboutSwiper = new Swiper(".opinionSwiper", {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        speed: 1200,
        //effect: "fade",
        /*autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },*/
        navigation: {
          nextEl: ".opinion-swiper-button-next",
          prevEl: ".opinion-swiper-button-prev",
        },
      });
    }
    if ($(".page-template-page-partner-products")[0]) {
      document.querySelectorAll(".gallery-swiper").forEach((swiperEl, index) => {
        new Swiper(swiperEl, {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: {
              nextEl: ".gallery-" + (index + 1) + " .swiper-button-next",
              prevEl: ".gallery-" + (index + 1) + " .swiper-button-prev",
            },
            pagination: {
              el: ".gallery-" + (index + 1) + " .swiper-pagination",
              clickable: true,
          },
        });
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
