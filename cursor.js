let mouseCursor = document.querySelector(".cursor");
let htmlSelector = document.querySelector("*");
let iframe = document.querySelector("iframe");
let map = document.querySelector("#map");

let timer = 0;
$(document).on("mousemove", function (e) {
    $('.cursor').show();
    $(".cursor").css({
        left: e.clientX,
        top: e.clientY,
    });

    clearTimeout(timer);
    timer = setTimeout(function () {

        $('.cursor').hide();
    }, 2555);
});

htmlSelector.addEventListener("mousemove", function () {
    mouseCursor.style.display = "block";
});

iframe.addEventListener("mouseover", function () {
    mouseCursor.style.display = "none";
});

iframe.addEventListener("mouseleave", function () {
    mouseCursor.style.display = "block";
});

map.addEventListener("mouseover", function () {
    mouseCursor.style.display = "none";
});

map.addEventListener("mouseleave", function () {
    mouseCursor.style.display = "block";
});