// Shows or hides classes depending on flash being installed
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
        $(this).addClass('active-hover')
    },
    function(){
        $(this).removeClass('active-hover')
    }
)
