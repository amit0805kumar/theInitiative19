$(function(){

var home = $('#home');
var register = $('#register');
var task = $('#task');
var setting = $('#setting');
var coordinators = $('#coordinators');
    
    
    
    home.click(function(){
        $('.content__box').addClass('hide');
        $('#b1').removeClass('hide');
    });
     register.click(function(){
        $('.content__box').addClass('hide');
        $('#b2').removeClass('hide');
    });
     task.click(function(){
        $('.content__box').addClass('hide');
        $('#b3').removeClass('hide');
    });
     setting.click(function(){
        $('.content__box').addClass('hide');
        $('#b4').removeClass('hide');
    });
     coordinators.click(function(){
        $('.content__box').addClass('hide');
        $('#b5').removeClass('hide');
    });
    
});