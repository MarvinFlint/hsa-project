require('./bootstrap');
var $ = require('jquery');

$(function(){
    $('.logo').on('click', function(){
        if($('nav').hasClass('open')){
            $('.cover').css('display', 'none');
        }
        else{
            $('.cover').css('display', 'block');
        }
        $('nav').toggleClass('open');
        $('.nav-list').slideToggle(750);
        
    })
    $('.menu-main').on('click', function(){
        $(this).children('ul').slideToggle(750);
    })
});
