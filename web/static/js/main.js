// main menu
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

if (window.matchMedia('(max-width: 600px)').matches)
{
    $("ul.dropdown-menu").each(function () {
        $(this).parent('li').addClass('main-menu-icon');
    });

    $('li.main-menu-icon>a').on('touch touchstart', function(event){
        event.preventDefault();

        $(this).parent('li').toggleClass('active-icon');
        $(this).next('ul').toggle(
            function(){$(this).attr({"display": "block"});},
            function(){$(this).attr({"display": "none"});}
        );
    });
} else {
    $("ul.dropdown-submenu").each(function () {
        $(this).parent('li').addClass('submenu-icon');
    });
}

$('.search-button').on('click', '.search-toggle', function(e) {
    var selector = $(this).data('selector');

    $(selector).toggleClass('show').find('.search-input').focus();
    $(this).toggleClass('active');

    $('#autoComplete_results_list').toggleClass('d-block');

    e.preventDefault();
});