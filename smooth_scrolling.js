$(document).ready(function() {
    $("a ").on("click ", function(a) {
        if (this.hash !== " ") {
            a.preventDefault();
            var b = this.hash;
            $("html, body ").animate({
                    scrollTop: $(b).offset().top,
                },
                200,
                function() {
                    window.location.hash = b;
                }
            );
        }
    });
});