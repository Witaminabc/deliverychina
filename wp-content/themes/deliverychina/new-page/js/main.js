$(document).ready(function(){
  /////selectric////

  $('select').selectric({
    disableOnMobile: false,
    nativeOnMobile: false
  });

  /////mask//////

  $('#phone_us').mask('+7(000) 000-0000');


  //scroll_top header

  var $window = $(window);
      $window.on('load scroll', function() {
        var top = $window.scrollTop();

      if (top > 10){
        $('header').addClass('header--active');
        $('.h__wrap--top').slideUp(400).removeClass('h__wrap--top__active');
      }
      else{
        $('header').removeClass('header--active');
        $('.h__wrap--top').slideDown(400).addClass('h__wrap--top__active');
      }
  })

  // slider

  $('.main__slider--top').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:true,
    autoplay:true,
    adaptiveHeight:false,
    nextArrow: '<button class="slick-next_arrow slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg></button>',
    prevArrow: '<button class="slick-prev_arrow slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></button>',
    responsive: [
       {
         breakpoint: 769,
         settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true
         }
       }
      ]
  });


  $('.section_big2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots:false,
    autoplay:false,
    adaptiveHeight:false,
    infinite: true,
    swipe:false,
    nextArrow: '<button class="little_slider__arrow ls_next"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg></button>',
    prevArrow: '<button class="little_slider__arrow ls_prev"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></button>',
  });



  $('.sales_trand__slider').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots:false,
    autoplay:true,
    infinite: true,
    adaptiveHeight:false,
    nextArrow: '<button class="slick-next_arrow slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg></button>',
    prevArrow: '<button class="slick-prev_arrow slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></button>',
    responsive: [
       {
         breakpoint: 1200,
         settings: {
          slidesToShow: 3
         }
       },
       {
         breakpoint: 992,
         settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
         }
       },
       {
         breakpoint: 768,
         settings: {
          slidesToShow: 1,
          centerMode: true,
          slidesToScroll: 1,
         }
       }
      ]
  });

  if ($(window).width() < 651){
    $('.exp_tabs').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots:false,
    autoplay:false,
    infinite: false,
    controls:false,
    arrows:false,
    adaptiveHeight:false,
    nextArrow: '<button class="slick-next_arrow slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg></button>',
    prevArrow: '<button class="slick-prev_arrow slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></button>',
    responsive: [
       {
         breakpoint: 651,
         settings: {
          variableWidth: true,
          slidesToScroll: 1,
         }
       }
      ]
  });
  }

  //lightgallery

  if ($('#imageGallery').length) {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:false,
        thumbItem:6,
        prevHtml: '<i class="fa fa-angle-left fa-4x"></i>',
        nextHtml: '<i class="fa fa-angle-right fa-4x"></i>',
        slideMargin:10,
        enableDrag: false,
        currentPagerPosition:'left',
        videojs: true,
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide',
                download: false,
                showAfterLoad: true,
                autoplay: false,
                share: false,
                thumbnail: false,
                fullScreen: false,
                pager: false,
                zoom: false
            });
        }
      });
  }

  // sliders 

  $('.slider_big').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows:false,
      fade: false,
      asNavFor: '.slider_nav',
      responsive: [
       {
         breakpoint: 769,
         settings: {
          autoplay:true,
          infinite: true,
          asNavFor: false,
         }
       },
       {
         breakpoint: 651,
         settings: {
          slidesToShow: 1.1,
         }
       }
      ]
    });
    $('.slider_nav').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      asNavFor: '.slider_big',
      nextArrow: '<button class="slick-next_arrow slick-next_arrow--modific slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z" class=""></path></svg></button>',
      prevArrow: '<button class="slick-prev_arrow slick-prev_arrow--modific slick_arrow"><svg aria-hidden="true" data-prefix="fal" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8" style="font-size: 48px;"><path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z" class=""></path></svg></button>',
      focusOnSelect: true,
      responsive: [
         {
           breakpoint: 1200,
           settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true
           }
         }
       ]
    });



  $('.span_').on('click', function(event) {
    event.preventDefault();

    $('.city_marker--inside').removeClass('visible_mark');
    $(this).siblings('.city_marker--inside').addClass('visible_mark');
    

  });

  $(document).mouseup(function (e) {
    var container = $(".city_marker--inside");
    if (container.has(e.target).length === 0){
        $('.city_marker--inside').removeClass('visible_mark');
    }
  });


  // fancybox close

  $('.close_modal').on('click', function(event) {
    event.preventDefault();

    $.fancybox.close();
  });

  $('.slider_video__link').on('click', function(event) {
    event.preventDefault();
    var dataVideo = $(this).attr('data-video');

    $('.modal__slider_video').children('iframe').attr('src',dataVideo);
    console.log(dataVideo);
  });


  // counter

    $('.plus').click(function() {
        $(this).parent('div').parent('div').children('div.counter').children('span').html(+$(this).parent('div').parent('div').children('div.counter').children('span').html()+1);
    });
    $('.minus').click(function() {
      if($(this).parent('div').parent('div').children('div.counter').children('span').html()>0){
      $(this).parent('div').parent('div').children('div.counter').children('span').html(+$(this).parent('div').parent('div').children('div.counter').children('span').html()-1);
      }
    });


  // fancybox

   $('.modal_link, .zakaz, .viewing_link, .question_link, .leave_feedback, .slider_video__link').fancybox();


  // tabs

  function DataitemCheck(dataItem){
    $('.tab_content').each(function(elemId) {
      elemId = $(this).attr('id');

      if ($(this).attr('id') == dataItem) {
        $('.tab_content').removeClass('active_tab__container');
        $(this).addClass('active_tab__container');
      }
    });
  }

  $('.tab_links li a').on("click", function (event) {
      event.preventDefault();

      $('.tab_links li a').removeClass('m_f_ico__active_tabs');
      $(this).addClass('m_f_ico__active_tabs');

      var dataItem  = $(this).attr('data-item');
      DataitemCheck(dataItem);
   });

  // tabs 2

  function DataitemCheck(dataItem){
    $('.exp_content').each(function(elemId) {
      elemId = $(this).attr('id');

      if ($(this).attr('id') == dataItem) {
        $('.exp_content').removeClass('exp_content--active');
        $(this).addClass('exp_content--active');
      }
    });
  }

  $('.exp_tabs li a').on("click", function (event) {
      event.preventDefault();

      $('.exp_tabs li a').removeClass('exp_tabs--active');
      $(this).addClass('exp_tabs--active');

      var dataItem  = $(this).attr('data-item');
      DataitemCheck(dataItem);
   });

  // tabs 3

  function DataitemCheck2(dataItem){
    $('.product__content').each(function(elemId) {
      elemId = $(this).attr('id');

      if ($(this).attr('id') == dataItem) {
        $('.product__content').removeClass('product__content--active');
        $(this).addClass('product__content--active');
      }
    });
  }

  $('.product_info_tab__links li a').on("click", function (event) {
      event.preventDefault();

      $('.product_info_tab__links li a').removeClass('product_info_tab--active');
      $(this).addClass('product_info_tab--active');

      var dataItem  = $(this).attr('data-item');
      DataitemCheck2(dataItem);
   });

  // tabs 4

  function DataitemCheck(dataItem){
    $('.feedback__content').each(function(elemId) {
      elemId = $(this).attr('id');

      if ($(this).attr('id') == dataItem) {
        $('.feedback__content').removeClass('feedback__content--active');
        $(this).addClass('feedback__content--active');
      }
    });
  }

  $('.product_feedback__tab_link li a').on("click", function (event) {
      event.preventDefault();

      $('.product_feedback__tab_link li a').removeClass('product_feedback_tab--active');
      $(this).addClass('product_feedback_tab--active');

      var dataItem  = $(this).attr('data-item');
      DataitemCheck(dataItem);
   });

  // tabs 5

  function DataitemCheck3(dataItem){
    $('.contacts_tabs__container').each(function(elemId) {
      elemId = $(this).attr('id');

      if ($(this).attr('id') == dataItem) {
        $('.contacts_tabs__container').removeClass('contacts_tabs__container--active');
        $(this).addClass('contacts_tabs__container--active');
      }
    });
  }

  $('.contacts_tabs__link li a').on("click", function (event) {
      event.preventDefault();

      $('.contacts_tabs__link li a').removeClass('contacts_tabs__link--active');
      $(this).addClass('contacts_tabs__link--active');

      var dataItem  = $(this).attr('data-item');
      DataitemCheck3(dataItem);
   });

  // slideToggle

  $('.exp_content--bottom a').on('click', function(event) {
    event.preventDefault();

    if (($(this).hasClass('not_change')) > 0) {
      $(this).removeClass('not_change');
      $(this).addClass('change');
      $(this).children('span').text('скрыть');
      $(this).children('i').css('transform','rotate(180deg)');
    }
    else if (($(this).hasClass('change')) > 0) {
      $(this).removeClass('change');
      $(this).addClass('not_change');
      $(this).children('span').text('подробнее');
      $(this).children('i').css('transform','rotate(0deg)');
    }
    
    $(this).parent('.exp_content--bottom').siblings('.exp_content--middle').children('.exp_content--hidden').slideToggle(400);
  });

  // change date


  $('.call_cont').on('click', function(event) {
    event.preventDefault();
    
    $('.call_ul').addClass('city_ul--active');

  });


  // change city

  $('.active_city').on('click', function(event) {
    event.preventDefault();
    
    $('.city_ul').addClass('city_ul--active');

  });


  $('.city_ul li a').on('click', function(event) {
    event.preventDefault();

    $('.city_ul').removeClass('city_ul--active');
    
    var getCity = $(this).text();
    $('.active_city').children('span').text(getCity);

  });

  // close block

  $(document).mouseup(function (e) {
    var container = $(".city_ul");
    if (container.has(e.target).length === 0){
        $('.city_ul').removeClass('city_ul--active');
    }
  });

  $(document).mouseup(function (e) {
    var container = $(".call_ul");
    if (container.has(e.target).length === 0){
        $('.call_ul').removeClass('city_ul--active');
    }
  });

  


  // photo quiz

  $('.prev_sec').on('click', function(event) {
    event.preventDefault();
    
    changePhoto();

  });

  function changePhoto(){
    var thisParam = $('.sales_trand__slider > div section').find('.active_figure');
    $(thisParam).addClass('ewefwefwef');

    if ($(thisParam).prev() ) {}
    console.log(thisParam);
  }


  // menu responsive

  if ($(window).width() < 992) {
   $('.header__inside_cont, .work_time, .call_cont').appendTo('.menu_responsive__container');
   $('.span--modified').text('Телефоны:');

   // open on click

  $('.menu_dropdown > li > a').on('click', function(event) {
    event.preventDefault();
    
    $(this).siblings('.menu_dropdown--inside').slideToggle(400);
  });

  // preloader

    $(window).bind('load',function() {
      setTimeout(function () { 
        $(".preloader").fadeOut();  
      }, 1000);  
    });

  }

  //

   $('.mob_menu__button').on('click', function () {
     if($(this).hasClass('mob_menu__button--active')){
      $(this).removeClass('mob_menu__button--active');
      $('.menu_responsive__container').removeClass('navigation--active');
     }
     else{
      $(this).addClass('mob_menu__button--active');
      $('.menu_responsive__container').addClass('navigation--active');
     }
   });


   ////catalog///

   $('.m_catalog_filter__span').on('click', function () {
     if($(this).hasClass('m_catalog_filter__span--active')){
      $(this).removeClass('m_catalog_filter__span--active');
      $(this).children('svg').css('transform','rotate(0deg)');
      $(this).next('ul').slideUp(400);
     }
     else{
      $(this).addClass('m_catalog_filter__span--active');
      $(this).children('svg').css('transform','rotate(180deg)');
      $(this).next('ul').slideDown(400);
     }
   });


   // append

   if ($(window).width() < 651){
    $('.product_card--right .title_span').appendTo('.product_card--left');
   }


   //////////

   $('.mob_filter').on('click', function () {
     if($(this).hasClass('mob_filter--active')){
      $(this).removeClass('mob_filter--active').children('svg').css('transform','rotate(0deg)');
      $(this).next('form').slideUp(400).removeClass('m_catalog__left--aftive');
     }
     else{
      $(this).addClass('mob_filter--active').children('svg').css('transform','rotate(180deg)');
      $(this).next('form').slideDown(400).addClass('m_catalog__left--aftive');
     }
   });


   function DataitemCheck(dataItem){
    $('.tab_content__order').each(function(elemId) {
      elemId = $(this).attr('id');

      if ($(this).attr('id') == dataItem) {
        $('.tab_content__order').removeClass('active_tab__container_order');
        $(this).addClass('active_tab__container_order');
      }
    });
  }

  $('.m_order__tab li a').on("click", function (event) {
      event.preventDefault();

      $('.m_order__tab li a').removeClass('m_order_tabs--active');
      $(this).addClass('m_order_tabs--active');

      var dataItem  = $(this).attr('data-item');
      DataitemCheck(dataItem);
   });

  //////map///////

    if ($('#map').length) {
      
      function initMap() {
          var img = {
            url: "img/map_marker.png",
          };

          var myLatlng = new google.maps.LatLng(55.1295599, 82.8984378);
          
          var mapOptions = {
            zoom: 16,
            center: myLatlng,
            disableDefaultUI: true // отключение интерфейса
          }
          var map = new google.maps.Map(document.getElementById('map'), mapOptions);
         
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              icon: img,
              title: 'Marker1'
          });
      };

      initMap();
    }

    function faqDiv(){
      if (($('.faq_content').hasClass('faq_content__default')) > 0) {
        $(this).removeClass('faq_content__default');
      }
    }

    // faq

    $('.faq_ul li a').on('click', function(event) {
      event.preventDefault();
      faqDiv();
      if (($(this).siblings('.faq_content').hasClass('faq_content__default')) > 0) {
        $(this).siblings('.faq_content').slideUp(400);
        $(this).children('span').removeClass('arrow_act');
        $(this).siblings('.faq_content').removeClass('faq_content__default');
      }else{
        $(this).siblings('.faq_content').slideDown(400);
        $(this).children('span').addClass('arrow_act');
        $(this).siblings('.faq_content').addClass('faq_content__default');
      }
    });

});