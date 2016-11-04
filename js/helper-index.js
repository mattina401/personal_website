/**
 * Created by kim on 2016-11-03.
 */


$("#card").flip({
    axis: 'y',
    trigger: 'click',
});


var test = document.getElementById("front-logo");

function whatClicked() {
    var heading = $('#main-dino').clone().removeClass("run-ani");

    $('#main-dino').remove();
    $('#top-container').append(heading);

    $('#main-dino').addClass("run-ani");
}

test.addEventListener("click", whatClicked, false);


var test1 = document.getElementById("back-logo");

function whatClicked1() {


    $('#main-dino').removeClass("run-ani");
}

test1.addEventListener("click", whatClicked1, false);


'use strict';


// helper functions

;
(function ($, window, document, undefined) {
    var s = document.body || document.documentElement, s = s.style, prefixAnimation = '', prefixTransition = '';

    if (s.WebkitAnimation == '')    prefixAnimation = '-webkit-';
    if (s.MozAnimation == '')        prefixAnimation = '-moz-';
    if (s.OAnimation == '')        prefixAnimation = '-o-';

    if (s.WebkitTransition == '')    prefixTransition = '-webkit-';
    if (s.MozTransition == '')        prefixTransition = '-moz-';
    if (s.OTransition == '')        prefixTransition = '-o-';

    $.fn.extend(
        {
            onCSSAnimationEnd: function (callback) {
                var $this = $(this).eq(0);
                $this.one('webkitAnimationEnd mozAnimationEnd oAnimationEnd oanimationend animationend', callback);
                if (( prefixAnimation == '' && !( 'animation' in s ) ) || $this.css(prefixAnimation + 'animation-duration') == '0s') callback();
                return this;
            },
            onCSSTransitionEnd: function (callback) {
                var $this = $(this).eq(0);
                $this.one('webkitTransitionEnd mozTransitionEnd oTransitionEnd otransitionend transitionend', callback);
                if (( prefixTransition == '' && !( 'transition' in s ) ) || $this.css(prefixTransition + 'transition-duration') == '0s') callback();
                return this;
            }
        });
})(jQuery, window, document);


window.onload = function () {
    $('#dino1').addClass("dino1");
}


console.log('page loaded');


var previousScroll = 0,
    headerOrgOffset = $('.container').height();

$('#header').height(headerOrgOffset);

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


