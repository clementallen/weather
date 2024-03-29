var url = this.location.pathname;
var parts = url.split('/');
var page;

if (parts[parts.length - 1].length === 0) {
    page = parts[parts.length - 2];
} else {
    page = parts[parts.length - 1];
}

$(`a[href*="${page}"]`).parent().addClass('active');

// Makes nav buttons darker on hover
$('.nav li').hover(
    function () {
        $(this).addClass('active-hover');
    },
    function () {
        $(this).removeClass('active-hover');
    },
);
