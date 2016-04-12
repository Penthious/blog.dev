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
}

$('#portfolioNav').on('click', function () {
    console.log('this');
});
