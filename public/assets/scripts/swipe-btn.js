$(document).ready (function(){
  var body = $('body');
  var swipeBtn = $('#swipe-checkbox');

  swipeBtn.click(function(){
    if(swipeBtn.is(':checked')){
      body.attr('id', 'dark-theme');
    }

    else {
      body.removeAttr('id');
    }
  });
});
