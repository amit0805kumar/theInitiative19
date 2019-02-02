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


    //Sturcture Page Effects

    var obA1 = $('#obA1');
    var obA2 = $('#obA2');
    var obA3 = $('#obA3');
    var obA4 = $('#obA4');
    var obA5 = $('#obA5');
    var layer1 = $('#layer1');

    layer1.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 20);

        obA1.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });

    layer1.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 16);
        var valueY = (e.pageY * -1 / 13);

        obA2.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer1.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 10);
        var valueY = (e.pageY * -1 / 20);

        obA3.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer1.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 15);

        obA4.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer1.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 10);
        var valueY = (e.pageY * -1 / 10);

        obA5.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });


    var obB1 = $('#obB1');
    var obB2 = $('#obB2');
    var obB3 = $('#obB3');
    var obB4 = $('#obB4');
    var obB5 = $('#obB5');
    var layer2 = $('#layer2');

    layer2.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 30);
        var valueY = (e.pageY * -1 / 30);

        obB1.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });

    layer2.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 26);
        var valueY = (e.pageY * -1 / 23);

        obB2.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer2.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 30);

        obB3.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer2.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 30);
        var valueY = (e.pageY * -1 / 25);

        obB4.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer2.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 20);

        obB5.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    
    
    var obC1 = $('#obC1');
    var obC2 = $('#obC2');
    var obC3 = $('#obC3');
    var obC4 = $('#obC4');
    var obC5 = $('#obC5');
    var layer3 = $('#layer3');

    layer3.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 30);
        var valueY = (e.pageY * -1 / 30);

        obC1.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });

    layer3.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 26);
        var valueY = (e.pageY * -1 / 23);

        obC2.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer3.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 50);
        var valueY = (e.pageY * -1 / 50);

        obC3.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer3.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 25);

        obC4.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer3.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 20);

        obC5.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    
    
    var obD1 = $('#obD1');
    var obD2 = $('#obD2');
    var obD3 = $('#obD3');
    var obD4 = $('#obD4');
    var obD5 = $('#obD5');
    var layer4 = $('#layer4');

    layer4.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 35);
        var valueY = (e.pageY * -1 / 35);

        obD1.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });

    layer4.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 26);
        var valueY = (e.pageY * -1 / 30);

        obD2.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer4.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 20);
        var valueY = (e.pageY * -1 / 30);

        obD3.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer4.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 30);
        var valueY = (e.pageY * -1 / 35);

        obD4.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });
    layer4.mousemove(function (e) {
        var valueX = (e.pageX * -1 / 30);
        var valueY = (e.pageY * -1 / 30);

        obD5.css({
            'transform': 'translate3d(' + valueX + 'px,' + valueY + 'px,0)'
        });
    });

});
