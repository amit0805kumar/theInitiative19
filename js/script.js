$(function () {

    //Navigation
    $('.nav__button').click(function () {
        navTransformation();
    });

    $('.nav__menu').click(function () {
        navTransformation();

    });




    function navTransformation() {
        $('.nav__button').toggleClass('nav__button-hover');
        $('.nav__button').toggleClass('nav_button-animation');
        $(".nav__menu").toggleClass('expandNav');

        setTimeout(function () {
            $('.nav__csi').toggleClass('showNavEl');
            $('.nav__menu__list').toggleClass('showNavEl');
        }, 800);

    }



    //Page Transition

    var canvas = $('.canvas');

    var sectionAbout = $('.section__about');
    var sectionStructure = $('.section__structure');
    var sectionProbems = $('.section__problems');

    var pageNo = 0;
    var pages = {
        "0": sectionAbout,
        "1": sectionStructure,
        "2": sectionProbems
    };

    $('.navigation__down').click(function () {

        if (pageNo < 3 && pageNo > -1) {
            pages[pageNo].addClass('goUp');
            pageNo++;
        }


        //                canvas.removeClass('overFlowControl');
    });

    $('.navigation__up').click(function () {
        if (pageNo < 4 && pageNo > 0) {
            pages[pageNo - 1].removeClass('goUp');
            pageNo--;
        }


        //                canvas.addClass('overFlowControl');

    });

    $(window).keydown(function (event) {
        if (event.keyCode == 40) {
            if (pageNo < 3 && pageNo > -1) {
                pages[pageNo].addClass('goUp');
                pageNo++;
            }
        } else if (event.keyCode == 38) {
            if (pageNo < 4 && pageNo > 0) {
                pages[pageNo - 1].removeClass('goUp');
                pageNo--;
            }

        }
    });


    $("#headingAbout").append("<div class='glitch-window-1'></div>");
   
    //fill div with clone of real header
    $("h1.glitched-1").clone().appendTo(".glitch-window-1");
    
    
    
     $("#headingStruct").append("<div class='glitch-window-2'></div>");
   
    //fill div with clone of real header
    $("h1.glitched-2").clone().appendTo(".glitch-window-2");
    
    
     $("#headingProblems").append("<div class='glitch-window-3'></div>");
   
    //fill div with clone of real header
    $("h1.glitched-3").clone().appendTo(".glitch-window-3");


});
