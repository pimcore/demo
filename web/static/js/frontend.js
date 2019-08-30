// center the caption on the portal page
$("#portalHeader .carousel-caption").css("bottom", Math.round(($(window).height() - $("#portalHeader .carousel-caption").height()) / 3) + "px");

$(document).ready(function () {

    // lightbox (magnific)
    $('a.thumbnail').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $(".image-hotspot").tooltip();
    $(".image-marker").tooltip();

    //scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('#back-to-top').addClass('display-block');
        } else {
            $('#back-to-top').removeClass('display-block');
        }
    });

    $('#back-to-top').click(function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        return false;
    });
});