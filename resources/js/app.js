require('./bootstrap');
var $ = require('jquery');

$(function(){
    $('.arrow').on('click', function(){
        if($('nav').hasClass('open')){
            $('.cover').css('display', 'none');
        }
        else{
            $('.cover').css('display', 'block');
        }
        $('nav').toggleClass('open');
        $('.nav-list').slideToggle(750);

        $('.arrow').toggleClass('arrow-transformed');
    })
    $('.menu-main').on('click', function(){
        $(this).children('ul').slideToggle(750);
    })
    $('.cover').on('click', function(){
        $('.cover').css('display', 'none');
        $('nav').toggleClass('open');
        $('.nav-list').slideToggle(750);
        $('.arrow').toggleClass('arrow-transformed');
    })
    $(document).on('keydown', function(e){
        console.log(e.key);
        if(e.key == "Escape"){
            if($('nav').hasClass('open')){
                $('.cover').css('display', 'none');
                $('nav').toggleClass('open');
                $('.nav-list').slideToggle(750);
                $('.arrow').toggleClass('arrow-transformed');
            }
        }
    })
});
