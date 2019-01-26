$(function () {

    var pageNO = 0;
    
    $('.nav__button').click(function () {
        navTransformation();
    });

    $('.nav__menu').click(function () {
        navTransformation();
    });



    function navTransformation() {
        $(".nav__menu").toggleClass('expandNav');
        $('.nav__button').toggleClass('nav__button-hover');
        $('.nav__button').toggleClass('nav_button-animation');
    }
    
    
    var sectionAbout = $('.section__about');
    
    $('.navigation__up').click(function(){
        sectionAbout.addClass('goUp');
    });
    
     $('.navigation__down').click(function(){
        sectionAbout.removeClass('goUp');
    });
});
