console.log(window.location.pathname);
switch (window.location.pathname) {
    case '/': $('#homeNav').addClass('active');
        break;
    case '/portfolio': $('#portfolioNav').addClass('active');
        break;
    case '/resume': $('#resumeNav').addClass('active');
        break;
    case '/portfolio': $('#projectsNav').addClass('active');
        break;
    case '/simplesimon': $('#simplesimonNav').addClass("glyphicon glyphicon-menu-right");
        break;
    case '/whackamole': $('#whackamoleNav').addClass("glyphicon glyphicon-menu-right");
        break;
    case '/calculator': $('#calculatorNav').addClass("glyphicon glyphicon-menu-right");
        break;
    case '/weathermap': $('#weathermapNav').addClass("glyphicon glyphicon-menu-right");
        break;
    case '/tictactoe': $('#tictactoeNav').addClass("glyphicon glyphicon-menu-right");
        break;
}

$('#projectsNav').on('click', function () {
    $('#toggleGlyph').removeClass().addClass('glyphicon glyphicon-triangle-bottom');
});
$('.dropdown').on('hidden.bs.dropdown', function () {
    $('#toggleGlyph').removeClass().addClass('glyphicon glyphicon-triangle-left');
});

setTimeout(function () {
    $('.alert').slideUp(900);
}, 500);
