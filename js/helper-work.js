/**
 * Created by kim on 2016-11-03.
 */

window.onload = function () {
    $('#dino1').addClass("dino1");
}


console.log('page loaded');


var slideIndex = 1;

function plusDivs(n, m) {
    showDivs(slideIndex += n, m);
}

function showDivs(n, m) {
    var i;
    var x = document.getElementsByClassName(m);
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.visibility = "hidden";
    }
    x[slideIndex - 1].style.visibility = "visible";

}


$("#card").flip({
    axis: 'y',
    trigger: 'click',
});


var test = document.getElementById("front-logo");

function whatClicked() {
    var heading = $('#work-dino').clone().removeClass("run-ani-work");

    $('#work-dino').remove();
    $('#top-container').append(heading);

    $('#work-dino').addClass("run-ani-work");
}

test.addEventListener("click", whatClicked, false);


var test1 = document.getElementById("back-logo");

function whatClicked1() {


    $('#work-dino').removeClass("run-ani-work");
}

test1.addEventListener("click", whatClicked1, false);


var previousScroll = 0,
    headerOrgOffset = $('.container').height();

$('#header').height($('.container').height());

$(window).scroll(function () {
    var currentScroll = $(this).scrollTop();

    if (currentScroll > 0) {


        if (currentScroll > previousScroll) {
            /* $('#header').slideUp(); */
            $('#header').addClass('slide');
        } else {
            /*$('#header').slideDown();*/
            $('#header').removeClass('slide');
            $('.container').addClass("change1");
        }
    }
    previousScroll = currentScroll;
});

$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll == 0) {
        $(".container").addClass("change");
        $('.container').removeClass("change1");
    } else {
        $(".container").removeClass("change");
    }


});