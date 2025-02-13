import Swiper from "swiper/bundle";

//wait until images, links, fonts, stylesheets, and js is loaded
window.addEventListener(
  "load",
  () => {
    if ( $(".page-template-page-home")[0] || $(".post-type-archive-eigenprodukte")[0] || $(".page-template-page-partner-and-produkte")[0] ) {
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
  },
  false
);
