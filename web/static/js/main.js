// main menu
$(".navbar ul.navbar-nav>li>ul").each(function () {
    var li = $(this).parent();
    var a = $("a.nav-link", li);

    $(this).addClass("dropdown-menu");
    li.addClass("dropdown");
    a.addClass("dropdown-toggle");
    li.on("mouseenter", function () {
        $("ul", $(this)).show();
    });
    li.on("mouseleave", function () {
        $("ul", $(this)).hide();
    });
});