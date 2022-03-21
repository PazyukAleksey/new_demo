document.addEventListener('DOMContentLoaded', function(event) {

  let scriptSwiper = document.createElement("script");
  let switcher = true;
  scriptSwiper.src = `/wp-content/themes/metaminder-child/assets/swiper/swiper-bundle.min.js`;

  document.addEventListener('scroll', function(){
    swiper_init(switcher);
    switcher = false;
  });

  function swiper_init(switcher){
    if (switcher == true) {
      document.body.appendChild(scriptSwiper);
    }
  }

  scriptSwiper.onload = function() {
    const sliderPricing = document.querySelector('.slider-wrapper');
    const sliderSuccessCases = document.querySelector('.first-screen__dots-wrapper');
    const sliderHomePage = document.querySelector('.clients__slider');

    if (sliderPricing) {
      let swiperDots = new Swiper('.slider-wrapper', {
          slidesPerView: 'auto',
          spaceBetween: 10,
          centeredSlides: false,
          breakpoints: {
            "768": {
              slidesPerView: 'auto',
              spaceBetween: 20,
              centeredSlides: false,
            },
            "1280": {
              slidesPerView: 4,
              spaceBetween: 0,
              centeredSlides: false,
            },
            "1450": {
              slidesPerView: "auto",
              spaceBetween: 20,
              centeredSlides: false,
            }
          },
      });
    }

    if (sliderSuccessCases) {
      let swiperDots = new Swiper('.first-screen__dots-wrapper', {
        slidesPerView: "auto",
        spaceBetween: 20,
        watchSlidesProgress: true,
        freeMode: true,
        breakpoints: {
          "768": {
            slidesPerView: 5,
            spaceBetween: 20,
          }
        },
      });

      const swiper = new Swiper('.first-screen__slider-wrapper', {
        slidesPerView: "auto",
        spaceBetween: 20,
        centeredSlides: true,
        thumbs: {
          swiper: swiperDots,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        }
      });
    }

    if (sliderHomePage) {
      const swiper = new Swiper('.clients__slider', {
          slidesPerView: 3,

          navigation: {
              nextEl: '.clients__btn-next',
              prevEl: '.clients__btn-prev',
          },
          breakpoints: {
              0: {
                  slidesPerView: 1
              },
              360: {
                  slidesPerView: 2
              },
              768: {
                  slidesPerView: 3
              },
          }
      });
    }
  };


  let headerSticky = document.querySelector('.main-header');
  let lastScrollTop = 0;
  document.addEventListener("scroll", function(){
      var st = window.pageYOffset || document.documentElement.scrollTop;
      if (st > lastScrollTop && st > 80){
          headerSticky.classList.add('hide')
      } else {
          headerSticky.classList.remove('hide')
      }
      lastScrollTop = st <= 60 ? 0 : st; // For Mobile or negative scrolling
  }, false);

})