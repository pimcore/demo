if (window.matchMedia('(max-width: 600px)').matches)
{
    //mobile main navigation
    $("ul.dropdown-menu").each(function () {
        $(this).parent('li').addClass('main-menu-icon');
    });

    $('li.main-menu-icon>a').on('click', function (e) {
        if (e.offsetX > this.offsetWidth - 100) {
            e.preventDefault();
            $(this).parent('li').toggleClass('active-icon');
            $(this).next('ul').toggle();
        }
    });
} else {
    //  desktop main navigation
    $(".navbar ul.navbar-nav>li>ul").each(function () {
        var li = $(this).parent();
        var a = $("a.nav-link", li);

        $(this).addClass("dropdown-menu");
        li.addClass("dropdown");
        li.on("mouseenter", function () {
            $("ul.dropdown", $(this)).show();
        });
        li.on("mouseleave", function () {
            $("ul.dropdown", $(this)).hide();
        });

    });

    $("ul.dropdown-submenu").each(function () {
        $(this).parent('li').addClass('submenu-icon');
    });
}

//search bar
$('.search-button').on('click', '.search-toggle', function(e) {
    var selector = $(this).data('selector');

    $(selector).toggleClass('show').find('.search-input').focus();
    $(this).toggleClass('active');

    $('#autoComplete_results_list').toggleClass('d-block');

    e.preventDefault();
});