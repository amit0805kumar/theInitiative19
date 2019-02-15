$(function () {

    var home = $('#home');
    var register = $('#register');
    var task = $('#task');
    var coordinators = $('#coordinators');
    var instructions = $('#instructions');



    home.click(function () {
        $('.content__box').addClass('hide');
        $('#b1').removeClass('hide');
    });
    register.click(function () {
        $('.content__box').addClass('hide');
        $('#b2').removeClass('hide');
    });
    task.click(function () {
        $('.content__box').addClass('hide');
        $('#b3').removeClass('hide');
    });
    coordinators.click(function () {
        $('.content__box').addClass('hide');
        $('#b4').removeClass('hide');
    }); 
    instructions.click(function () {
        $('.content__box').addClass('hide');
        $('#b5').removeClass('hide');
    });

});
