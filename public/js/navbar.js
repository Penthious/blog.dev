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



$(document).ready(function () {

    if (($('#login-dp > li > div > div.col-md-12 > form > div:nth-child(2) > span').length > 0
    || $('#login-dp > li > div > div.col-md-12 > form > div:nth-child(3) > span').length > 0)
    && window.location.pathname != '/users/create') {
        $('body > div.blog-masthead.navContainer > div > nav > ul > li.dropdown').addClass('open');
    }
});
