
//top-to-button starts
$(window).scroll(function () {
    if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(200);
    } else {
        $('#return-to-top').fadeOut(200);
    }
});
$('#return-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

//top-to-button ends


//slick starts
$(function () {
    $('.slide').slick({
        arrows: false,
        dots: true,
        autoPlay: true,
    });
});

//slick ends

//counter starts
$(document).ready(function () {

    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function (start, value, id) {
        var localStart = start;
        setInterval(function () {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 20);
    }

    for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
    }
});

//counter ends


//gallary starts
var mixer = mixitup('.cont');
var mixer = mixitup(containerEl);
var mixer = mixitup(containerEl, {
    selectors: {
        target: '.blog-item'
    },
    animation: {
        duration: 300
    }
});
//gallary ends


