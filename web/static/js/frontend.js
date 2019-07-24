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
});