let mouseCursor = document.querySelector('.cursor');
let iframe = document.querySelector('iframe');
let map = document.querySelector('#map');

window.addEventListener('mousemove', cursor);

function cursor(e) {
    // console.log(e);
    mouseCursor.style.top = e.pageY + 'px';
    mouseCursor.style.left = e.pageX + 'px';
}

iframe.addEventListener("mouseover", function() {
    mouseCursor.style.display = 'none';
})

iframe.addEventListener("mouseleave", function() {
    mouseCursor.style.display = 'block';
})

map.addEventListener("mouseover", function() {
    mouseCursor.style.display = 'none';
})

map.addEventListener("mouseleave", function() {
    mouseCursor.style.display = 'block';
})