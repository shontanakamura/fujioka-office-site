'use strict';

$(function(){
  $('.header-container__menu').on('click', function () {
      $('.target-menu, .main, .header, .target__inner, .nav-right, .nav-right__group, .target__inner__line, .target, .nav, .ichath-txt, .target-list,.header-container__menu').toggleClass('show');
  });
  })

  $(function(){
    $('.js-menu-item__link').each(function(){
        $(this).on('click',function(){
            $(this).toggleClass('on');
            $("+.submenu",this).slideToggle()
            return false;
        });
    });
  });


  const position = $(".header").offset().top;

  $('.pagetop,.pagetop-arrow,.footer-pageArrow').click(function(){
    $("html,body").animate({
        scrollTop : position
    }, {
        queue : false
    });
});

