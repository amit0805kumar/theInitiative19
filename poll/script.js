$(function () {




    //header buttons
    var offset1 = $("#header__btn").offset();

    $("#header__btn").mouseenter(function (e) {

        var cursorX = e.pageX;
        var cursorY = e.pageY;

        var clickX = cursorX - offset1.left;
        var clickY = cursorY - offset1.top;

        $("#btn1Clr1").css({
            left: clickX,
            top: clickY,
            opacity: 1
        });
        $("#btn1Clr2").css({
            left: clickX,
            top: clickY,
            opacity: .5
        });

        $("#btn1Clr1").animate({
            height: '300px',
            width: '300px'
        }, 800);
        $("#btn1Clr2").animate({
            height: '600px',
            width: '600px'
        }, 800);
    });

    $("#header__btn").mouseleave(function (e) {
        var cursorX = e.pageX;
        var cursorY = e.pageY;

        var leaveX = cursorX - offset1.left;
        var leaveY = cursorY - offset1.top;

        $("#btn1Clr1").animate({
            height: '0px',
            width: '0px',
            left: leaveX,
            top: leaveY
        }, 600);
        $("#btn1Clr2").animate({
            height: '0px',
            width: '0px',
            left: leaveX,
            top: leaveY
        }, 600);
    });


    $('.popup__cut').click(function () {
        $('.popup').addClass("closePopup");
        $('.popup').removeClass("openPopup");
    });

    $('#header__btn').click(function () {
        $('.popup').addClass("openPopup");
        $('.popup').removeClass("closePopup");
        $('.popup__topic').text(topic);
    });


    var bt1 = $('#bt1');
    var bt2 = $('#bt2');
    var bt3 = $('#bt3');
    var bt4 = $('#bt4');
    var bt5 = $('#bt5');
    var bt6 = $('#bt6');
    var bt7 = $('#bt7');
    var bt8 = $('#bt8');
    var bt9 = $('#bt9');
    var bt10 = $('#bt10');
    var topic = "NOT SELECTED"

    bt1.click(function () {
        selected(bt1);
        topic = "TOPIC1";
    });
    bt2.click(function () {
        selected(bt2);
        topic = "TOPIC2";
    });

    bt3.click(function () {
        selected(bt3);
        topic = "TOPIC3";
    });

    bt4.click(function () {
        selected(bt4);
        topic = "TOPIC1";
    });

    bt5.click(function () {
        selected(bt5);
        topic = "TOPIC1";
    });

    bt6.click(function () {
        selected(bt6);
        topic = "TOPIC1";
    });

    bt7.click(function () {
        selected(bt7);
        topic = "TOPIC1";
    });
    bt8.click(function () {
        selected(bt8);
        topic = "TOPIC1";
    });
    bt9.click(function () {
        selected(bt9);
        topic = "TOPIC1";
    });
    bt10.click(function () {
        selected(bt10);
        topic = "TOPIC10";
    });




    function selected(obj) {
        $('.form__option').removeClass('selected');
        obj.toggleClass('selected');
    }


});
