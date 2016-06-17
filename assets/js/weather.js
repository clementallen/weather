var strippedPath = this.location.pathname.replace(/\//g, '');
$('a[href="' + strippedPath + '/"]').parent().addClass('active');

if(FlashDetect.installed){
    $(".flash-disabled-only").hide();
    $(".flash-enabled").show();
}
else {
    $(".flash-disabled-only").show();
    $(".flash-enabled").hide();
}

// Makes nav buttons darker on hover
$('.nav li').hover(
    function(){
        $(this).addClass('active-hover');
    },
    function(){
        $(this).removeClass('active-hover');
    }
);
