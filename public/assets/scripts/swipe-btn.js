$(document).ready (function(){
  var body = $('body');
  var swipeBtn = $('#swipe-checkbox');
  var swipeBtnValue = JSON.parse(localStorage.getItem('swipeBtnValue')) || {},
      $checkbox = $(".swipe-btn :checkbox");

  $checkbox.on("change", function(){
    $checkbox.each(function(){
      swipeBtnValue[this.id] = this.checked;
    });

    localStorage.setItem("swipeBtnValue", JSON.stringify(swipeBtnValue));
  });

  // On page load
  $.each(swipeBtnValue, function(key, value) {
    $("#" + key).prop('checked', value);
  });

  if(swipeBtn.is(':checked')){
    body.attr('id', 'dark-theme');
  }

  swipeBtn.click(function(){
    if(swipeBtn.is(':checked')){
      body.attr('id', 'dark-theme');
    }

    else {
      body.removeAttr('id');
    }
  });
});
