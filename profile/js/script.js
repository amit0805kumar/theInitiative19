$(function () {

    var home = $('#home');
    var register = $('#register');
    var task = $('#task');
    var coordinators = $('#coordinators');
    var instructions = $('#instructions');
    var noti = $('#noti');



    home.click(function () {
        $('.content__box').addClass('hide');
        $('#b1').removeClass('hide');
        $('.nav__link').removeClass('navActive');
        home.addClass('navActive');
        $('.container').removeClass('lowerH');
    });
    register.click(function () {
        $('.content__box').addClass('hide');
        $('#b2').removeClass('hide');
        $('.nav__link').removeClass('navActive');
        register.addClass('navActive');
        $('.container').addClass('lowerH');
    });
    task.click(function () {
        $('.content__box').addClass('hide');
        $('#b3').removeClass('hide');
        $('.nav__link').removeClass('navActive');
        task.addClass('navActive');
        $('.container').removeClass('lowerH');
    });
    coordinators.click(function () {
        $('.content__box').addClass('hide');
        $('#b4').removeClass('hide');
        $('.nav__link').removeClass('navActive');
        coordinators.addClass('navActive');
        $('.container').addClass('lowerH');
    });
    instructions.click(function () {
        $('.content__box').addClass('hide');
        $('#b5').removeClass('hide');
        $('.nav__link').removeClass('navActive');
        instructions.addClass('navActive');
        $('.container').removeClass('lowerH');
    });
    noti.click(function () {
        $('.content__box').addClass('hide');
        $('#b6').removeClass('hide');
        $('.nav__link').removeClass('navActive');
        noti.addClass('navActive');
        $('.container').removeClass('lowerH');
    });
    


});
