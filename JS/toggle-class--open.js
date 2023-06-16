

// Menuボタンを押したらis-activクラスを付ける
$(document).ready(function(){
  $('.c-slide--button').on({'click' : function(){
   $('.c-color-board--black').toggleClass('is-active'),
   $('.c-slide--button').toggleClass('is-active'),
   $('.l-aside').toggleClass('is-active');
   $('.l-main').toggleClass('is-active');
   $('.p-navigation--sp').toggleClass('is-active');
  }
  });
});


