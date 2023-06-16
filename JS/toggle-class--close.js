


// サイドメニューの×ボタンを押したらis-activクラスを外す
$(function(){
  $('.c-button-close').on({'click' : function(){
    $('.c-color-board--black').toggleClass('is-active'),
    $('.c-slide--button').toggleClass('is-active'),
    $('.l-aside').toggleClass('is-active');
    $('.l-main').toggleClass('is-active');
    $('.p-navigation--sp').toggleClass('is-active');
    }
  });
});