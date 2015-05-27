// shows or hides classes depending on flash being installed
if(FlashDetect.installed){
  $(".flash-disabled-only").hide();
  $(".flash-enabled").show();
}
else {
  $(".flash-disabled-only").show();
  $(".flash-enabled").hide();
}

// makes nav buttons darker on hover
$('.nav li').hover(
  function(){ $(this).addClass('active2') },
  function(){ $(this).removeClass('active2') }
)
