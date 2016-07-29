$(document).on('ready', function(){
    TweenLite.to('.horizon', 2, {opacity: 1, display: "block", ease: Power2.easeOut, y: 250});
    var section = $('.front' ).offset().top;
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > 3000){
            TweenLite.to('.royalton', 1.5, { opacity: 1, display: "block"});
        };
    });
});