let mouseCursor = document.querySelector(".cursor");
let htmlSelector = document.querySelector("*");
let iframe = document.querySelector("iframe");
let map = document.querySelector("#map");

// window.addEventListener("mousemove", cursor);

// function cursor(e) {
//     // console.log(e);
//     mouseCursor.style.top = e.clientY;
//     mouseCursor.style.left = e.clientX;
// }

$(document).on("mousemove", function(e) {
    $(".cursor").css({
        left: e.clientX,
        top: e.clientY,
    });
    // $(".cursor").css("display:block;");
    // mouseCursor.style.display = "block";
});

htmlSelector.addEventListener("mousemove", function() {
    mouseCursor.style.display = "block";
});

iframe.addEventListener("mouseover", function() {
    mouseCursor.style.display = "none";
});

iframe.addEventListener("mouseleave", function() {
    mouseCursor.style.display = "block";
});

map.addEventListener("mouseover", function() {
    mouseCursor.style.display = "none";
});

map.addEventListener("mouseleave", function() {
    mouseCursor.style.display = "block";
});