$(document).ready(() => {
    $('.menu-btn').on('click', event => {
        event.preventDefault();
        $('.navbox').slideToggle();
        $('.navbox-sub').slideUp();
    });

    // Submenu
    $('.sub-link').click(function () {
        $(this).children('.navbox-sub').slideToggle();
    });

    $('.navbox li').hover(() => {
        $('.select select').blur();
    });
});
