require('./bootstrap');
var $ = require('jquery');

$(function(){
    // navigation
    $('nav').on('click', function(e){
        // prevent nav closing on menu interaction
        let menus = $('nav ul li');
        if(!(menus.is(e.target))){
            // check menu status
            if($('nav').hasClass('open')){
                $('.cover').hide();
            }
            else{
                $('.cover').show();
            }
            // change menu status
            $('nav').toggleClass('open');
            // close menus if appropriate
            $('.nav-list').slideToggle(750);
            // play arrow animation
            $('.arrow').toggleClass('arrow-transformed');
        }        
    })
    // menu functionality
    $('.menu-main').on('click', function(){
        $(this).children('ul').slideToggle(750);
    })

    // nav closing functionality
    $('.cover').on('click', function(){
        $('.cover').css('display', 'none');
        $('nav').toggleClass('open');
        $('.nav-list').slideToggle(750);
        $('.arrow').toggleClass('arrow-transformed');
    })
    // check for keyevent
    $(document).on('keydown', function(e){
        // check for specific key
        if(e.key == "Escape"){
            // close menu if open
            if($('nav').hasClass('open')){
                $('.cover').css('display', 'none');
                $('nav').toggleClass('open');
                $('.nav-list').slideToggle(750);
                $('.arrow').toggleClass('arrow-transformed');
            }
        }
    })
});
