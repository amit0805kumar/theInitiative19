$(function () {

    var login = $('#loginBtn');
    var signUp = $('#signUpBtn');
    var loginForm = $('.loginForm');
    var registerFrom = $('.registerFrom');
    login.click(function(){
        login.addClass('btnActive');
        signUp.removeClass('btnActive');
        loginForm.removeClass('hide');
        registerFrom.addClass('hide');
    });
    signUp.click(function(){
        signUp.addClass('btnActive');
        login.removeClass('btnActive');
        loginForm.addClass('hide');
        registerFrom.removeClass('hide');
    });
    
    $('.popup__close').click(function(){
       $('.popup').removeClass('popupOpen'); 
    });
    
    $('.fpwd').click(function(){
         $('.popup').addClass('popupOpen');
    });
    
    

});
