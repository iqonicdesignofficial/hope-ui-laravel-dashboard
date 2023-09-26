require('./bootstrap');

if ($('#app-slider').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 4,
        autoplay:false,
        spaceBetween: 32,
        breakpoints: {
            270: { slidesPerView: 1 },
            550: { slidesPerView: 2 },
            991: { slidesPerView: 3 },
            1400: { slidesPerView: 3 },
            1500: { slidesPerView: 3 },
            1920: { slidesPerView: 4 },
            2040: { slidesPerView: 4 },
            2440: { slidesPerView: 4 }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('#app-slider',options);

    document.addEventListener('theme_scheme_direction', (e) => {
      swiper.destroy(true, true)
      setTimeout(() => {
          swiper = new Swiper('#app-slider',options);
      }, 500);
    })
}
//--------------testimonial---------------//
if ($('#testimonial-slider').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 4,
        autoplay:false,
        spaceBetween: 32,
        breakpoints: {
            270: { slidesPerView: 1 },
            550: { slidesPerView: 1 },
            991: { slidesPerView: 1 },
            1400: { slidesPerView: 1 },
            1500: { slidesPerView: 1 },
            1920: { slidesPerView: 1 },
            2040: { slidesPerView: 1 },
            2440: { slidesPerView: 1 }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('#testimonial-slider',options);

    document.addEventListener('theme_scheme_direction', (e) => {
      swiper.destroy(true, true)
      setTimeout(() => {
          swiper = new Swiper('#testimonial-slider',options);
      }, 500);
    })
}
if ($('#testimonial-one-slider').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 4,
        autoplay:false,
        spaceBetween: 32,
        breakpoints: {
            270: { slidesPerView: 1 },
            320: { slidesPerView: 1 },
            550: { slidesPerView: 2 },
            991: { slidesPerView: 3 },
            1400: { slidesPerView: 3 },
            1500: { slidesPerView: 3 },
            1920: { slidesPerView: 3 },
            2040: { slidesPerView: 4 },
            2440: { slidesPerView: 4 }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('#testimonial-one-slider',options);

    document.addEventListener('theme_scheme_direction', (e) => {
      swiper.destroy(true, true)
      setTimeout(() => {
          swiper = new Swiper('#testimonial-one-slider',options);
      }, 500);
    })
}



if ($('#testimonial-slider-two').length > 0) {
    const options = {
        centeredSlides: false,
        loop: false,
        slidesPerView: 4,
        autoplay:false,
        spaceBetween: 32,
        breakpoints: {
            270: { slidesPerView: 1 },
            550: { slidesPerView: 1 },
            991: { slidesPerView: 2 },
            1400: { slidesPerView: 2 },
            1500: { slidesPerView: 2 },
            1920: { slidesPerView: 2 },
            2040: { slidesPerView: 2 },
            2440: { slidesPerView: 2 }
        },
        pagination: {
            el: '.swiper-pagination'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar'
        }
    }
    let swiper = new Swiper('#testimonial-slider-two',options);

    document.addEventListener('theme_scheme_direction', (e) => {
      swiper.destroy(true, true)
      setTimeout(() => {
          swiper = new Swiper('#testimonial-slider-two',options);
      }, 500);
    })
}

  /*------------Minus-plus--------------*/
  const plusBtns = document.querySelectorAll('.iq-quantity-plus')
  const minusBtns = document.querySelectorAll('.iq-quantity-minus')
  const updateQtyBtn = (elem, value) => {
    const oldValue = elem.closest('[data-qty="btn"]').querySelector('[data-qty="input"]').value
    const newValue = Number(oldValue) + Number(value)
    if (newValue >= 1) {
      elem.closest('[data-qty="btn"]').querySelector('[data-qty="input"]').value = newValue
    }
  }
  Array.from(plusBtns, (elem) => {
    elem.addEventListener('click', (e) => {
      updateQtyBtn(elem, 1)
    })
  })
  Array.from(minusBtns, (elem) => {
    elem.addEventListener('click', (e) => {
      updateQtyBtn(elem, -1)
    })
  })


/*---------------------------------------------------------------------
              CounterUp 2
-----------------------------------------------------------------------*/
if (window.counterUp !== undefined) {
    const counterUp = window.counterUp["default"];
    const counterUp2 = document.querySelectorAll('.counter')
    Array.from(counterUp2, (el) => {
      if (typeof Waypoint !== typeof undefined) {
        const waypoint = new Waypoint({
          element: el,
          handler: function () {
            counterUp(el, {
              duration: 1000,
              delay: 10,
            });
            this.destroy();
          },
          offset: "bottom-in-view",
        });
      }
    })
  }

/*------------------------
Back To Top
--------------------------*/
const backToTop = document.getElementById("back-to-top")
if( backToTop !== null && backToTop !== undefined ) {
  document.getElementById("back-to-top").classList.add("animate__animated","animate__fadeOut")
  window.addEventListener('scroll', (e) => {
  if (document.documentElement.scrollTop > 250) {
    document.getElementById("back-to-top").classList.remove("animate__fadeOut")
    document.getElementById("back-to-top").classList.add("animate__fadeIn")
  }else {
    document.getElementById("back-to-top").classList.remove("animate__fadeIn")
    document.getElementById("back-to-top").classList.add("animate__fadeOut")
  }
})
// scroll body to 0px on click
document.querySelector('#top').addEventListener('click', (e) => {
  e.preventDefault()
  window.scrollTo({top: 0, behavior: 'smooth'});
})
}
