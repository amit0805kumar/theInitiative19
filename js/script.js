$(function () {

    //Navigation
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

    $('.navigation__up').click(function () {

        if (pageNo < 3 && pageNo > -1) {
            pages[pageNo].addClass('goUp');
            pageNo++;
            console.log(pageNo);
        }


        //        canvas.removeClass('overFlowControl');
    });

    $('.navigation__down').click(function () {
        if(pageNo < 4 && pageNo > 0) {
            pages[pageNo - 1].removeClass('goUp');
            pageNo--;
            console.log(pageNo);
        }


        //        canvas.addClass('overFlowControl');

    });

});
