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
let timer = 0;
$(document).on("mousemove", function(e) {
    $('.cursor').show();
    $(".cursor").css({
        left: e.clientX,
        top: e.clientY,
    });

    clearTimeout(timer);
    timer = setTimeout(function() {
        // hides the cursor when the user stops moving the mouse after 4.555 seconds
        $('.cursor').hide();
    }, 2555);

    console.log('timer: ' + timer);

    console.log(e);


    console.log('clientX' + e.screenX);

    console.log('pageX' + e.pageX);


    console.log('X' + e.X);

    // $(document).hover(function() {
    //     console.log('hovered');
    // });

    let hovered = $('html:hover,body:hover,html:active,body:active').length > 0 ? 'hovered' : 'not hovered';
    console.log(hovered);


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