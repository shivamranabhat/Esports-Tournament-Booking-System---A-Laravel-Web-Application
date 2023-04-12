(function ($) {
  "user strict";

  $(document).ready(function() {
  // preloader
  $("#preloader").delay(300).animate({
    "opacity" : "0"
  }, 500, function() {
    $("#preloader").css("display","none");
  });

  // nice select
  $('select:not(.ignore)').niceSelect();

  // counter Up
  if (document.querySelector('.counter') !== null) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  }

  // scroll-to-top
  var ScrollTop = $(".scrollToTop");
  $(window).on('scroll', function() {
      if ($(this).scrollTop() < 500) {
          ScrollTop.removeClass("active");
      } else {
          ScrollTop.addClass("active");
      }
  });
  $('.scrollToTop').on('click', function () {
      $('html, body').animate({
          scrollTop: 0
      }, 500);
      return false;
  });

  // scrollTop
  var fixed_top = $("#header-section");
  $(window).on("scroll", function(){
    if( $(window).scrollTop() > 50){
        fixed_top.addClass("animated fadeInDown header-fixed");
    }
    else{
        fixed_top.removeClass("animated fadeInDown header-fixed");
    }
  });


  // navbar-click
  $(".navbar li a").on("click", function () {
    var element = $(this).parent("li");
    if (element.hasClass("show")) {
      element.removeClass("show");
      element.find("li").removeClass("show");
    }
    else {
      element.addClass("show");
      element.siblings("li").removeClass("show");
      element.siblings("li").find("li").removeClass("show");
    }
  });

  // Countdown
  $('[data-countdown]').each(function () {
    var $this = $(this),
      finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {
      $this.html(event.strftime('<H6> %D </H6> <H6> %H </H6> <H6> %M </H6> <H6> %S </H6>'));
    });
  });

  // testimonials-carousel
  $('.testimonials-carousel').slick({
    infinite: true,
    autoplay: true,
    focusOnSelect: false,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:"<button type='button' class='slick-prev pull-left btn-icon'><i class='fas fa-chevron-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right btn-icon'><i class='fas fa-chevron-right' aria-hidden='true'></i></button>",
    dots: true,
    dotsClass: 'section-dots',
    customPaging: function (slider, i) {
        var slideNumber = (i + 1),
            totalSlides = slider.slideCount;
        return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
    }
  });

  // testimonials-slider
  $('.testimonials-slider').slick({
    infinite: true,
    autoplay: true,
    focusOnSelect: false,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    prevArrow:"<button type='button' class='slick-prev pull-left btn-icon'><i class='fas fa-chevron-left' aria-hidden='true'></i></button>",
    nextArrow:"<button type='button' class='slick-next pull-right btn-icon'><i class='fas fa-chevron-right' aria-hidden='true'></i></button>",
    dots: false,
    dotsClass: 'section-dots',
    customPaging: function (slider, i) {
        var slideNumber = (i + 1),
            totalSlides = slider.slideCount;
        return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
    },
    responsive: [
      {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true
        }
      },
      {
        breakpoint: 778,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
      }
    ]
  });
    //hide flash message
    setTimeout(function() {
        $('.flash-message').fadeOut();
    }, 2000);


  // Shop Details Slide
  if (document.querySelector('.all-slider') !== null) {
    $('.all-slider').owlCarousel({
      loop: false,
      dots: false,
      nav: false,
      margin: 10,
      navigation : false,
      autoplay: false,
      items: 4,
      autoplayTimeout: 1000,
      smartSpeed: 1000,
      responsive: {
          0: {
              items: 4
          },
          768: {
              items: 4
          }
      }
    });
  }

  // Input Increase
  var minVal = 1, maxVal = 20;
  $(".increaseQty").on('click', function(){
    var $parentElm = $(this).parents(".qtySelector");
    $(this).addClass("clicked");
    setTimeout(function(){
        $(".clicked").removeClass("clicked");
    },100);
    var value = $parentElm.find(".qtyValue").val();
    if (value < maxVal) {
        value++;
    }
    $parentElm.find(".qtyValue").val(value);
  });
  $(".decreaseQty").on('click', function(){
    var $parentElm = $(this).parents(".qtySelector");
    $(this).addClass("clicked");
    setTimeout(function(){
        $(".clicked").removeClass("clicked");
    },100);
    var value = $parentElm.find(".qtyValue").val();
    if (value > 1) {
        value--;
    }
    $parentElm.find(".qtyValue").val(value);
  });

  // available game carousel
  $('.available-game-carousel').slick({
    infinite: true,
    autoplay: true,
    focusOnSelect: true,
    speed: 1000,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:"<button type='button' class='slick-prev pull-left btn-icon'></button>",
    nextArrow:"<button type='button' class='slick-next pull-right btn-icon'></button>",
    dots: false,
    dotsClass: 'section-dots',
    customPaging: function (slider, i) {
        var slideNumber = (i + 1),
            totalSlides = slider.slideCount;
        return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
    },
    responsive: [
        {
          breakpoint: 992,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true
          }
        },
        {
          breakpoint: 768,
          settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true
          }
        },
        {
          breakpoint: 480,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1
          }
        }
      ]
  });

  // Tournaments Slide
  $('.tournaments-slide').slick({
    infinite: true,
    autoplay: true,
    focusOnSelect: true,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    prevArrow:"<button type='button' class='slick-prev pull-left btn-icon'></button>",
    nextArrow:"<button type='button' class='slick-next pull-right btn-icon'></button>",
    dots: false,
    dotsClass: 'section-dots',
    customPaging: function (slider, i) {
        var slideNumber = (i + 1),
            totalSlides = slider.slideCount;
        return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
    },
    responsive: [
        {
          breakpoint: 992,
          settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true
          }
        },
        {
          breakpoint: 480,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1
          }
        }
      ]
  });

  /* Magnific Popup */
  if (document.querySelector('.popupvideo') !== null) {
    $('.popupvideo').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
    });
  }

  // wow Animation
  wow = new WOW(
    {
      animateClass: 'animated',
      offset: 100,
    }
  );
  wow.init();

});

})(jQuery);


