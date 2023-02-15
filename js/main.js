$(function () {
  initMenu();
  initLazy();
  initScroll();
  initPopupProgram();  
  initForFunFunction();
  itemsShow();

  function initMenu() {
    $('.header__menu').on('click', function () {
      $('.header__list').toggleClass('active')

    });
    $('.header__nav-link').on('click', function () {
      $('.ham, .header__list').removeClass('active');
    });

   
    $(window).scroll(function () {
      if ($(window).scrollTop() > 0) {
        $('.header').addClass("fixed");
      } else {
        $('.header').removeClass("fixed");
      }
    })

  }

  function initLazy() {

    let
      lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
      active = false,
      threshold = 100
      ;

    const lazyLoad = function (e) {
      if (active === false) {
        active = true;

        setTimeout(function () {
          lazyArr.forEach(function (lazyObj) {
            if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

              if (lazyObj.dataset.src) {
                let
                  img = new Image(),
                  src = lazyObj.dataset.src
                  ;
                img.src = src;
                img.onload = function () {
                  if (!!lazyObj.parent) {
                    lazyObj.parent.replaceChild(img, lazyObj);
                  } else {
                    lazyObj.src = src;
                  }
                }
                lazyObj.removeAttribute('data-src');
              }

              if (lazyObj.dataset.srcset) {
                lazyObj.srcset = lazyObj.dataset.srcset;
                lazyObj.removeAttribute('data-srcset');
              }

              lazyObj.classList.remove('lazy');
              lazyObj.classList.add('lazy-loaded');

              lazyArr = lazyArr.filter(function (obj) {
                return obj !== lazyObj;
              });

              if (lazyArr.length === 0) {
                document.removeEventListener('scroll', lazyLoad);
                window.removeEventListener('resize', lazyLoad);
                window.removeEventListener('orientationchange', lazyLoad);
              }
            }
          });

          active = false;
        }, 100);
      }
    };

    lazyLoad();

    document.addEventListener('scroll', lazyLoad);
    window.addEventListener('resize', lazyLoad);
    window.addEventListener('orientationchange', lazyLoad);

  }

  function initScroll() {
    if (!$('.scroll').length) return;

    $(document).on('click scroll.init', '.scroll', function (event) {
      event.preventDefault();
      $.fancybox.close();

      var
        hrefId = $(this).attr('href') || $(this).data('href'),
        posTop = $(hrefId).offset().top;
      $('html, body').animate({ scrollTop: posTop }, 1500);
    });
  }

  function initPopupProgram() {
    $('.program__item').on('click', function () {
      var img = $(this).find('.program__item-pic').html();
      var title = $(this).find('.program__item-title').html();
      var descr = $(this).find('.program__item-description').html();
  
      var popup = $('#popup-program');
  
      popup.find('.popup-program-pic').html(img);
      popup.find('.popup-program-title').html(title);
      popup.find('.popup-program-description').html(descr);
    })
  

  }

  function itemsShow(){
    let elements = document.querySelectorAll('.main__block > .main__item');
    let quant = 0.5;
    elements.forEach(element => {
        element.style.animationDelay = quant+'s';
        quant += 0.2;
    });
  }

  function initForFunFunction() {
    let mainTitle = document.querySelector('.main__title');
    if(window.innerWidth > 992){
      mainTitle.style.transform = 'translateY(0)';
      mainTitle.style.opacity = '1';
    }
  }
  
  document.addEventListener('scroll', () => {
    let block = $('.anim-block');

    for (let elem of block) {
      if (elem.getBoundingClientRect().top < 700) {
        elem.classList.add('anim-block--fadeIn');
      }
    }
  });

  $('[data-fancybox=""]').fancybox({
    autoFocus: false
  });

});