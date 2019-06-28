$( document ).ready(function() {

  //HOMEPAGE
  var isActuClosed = false;
  
  $('#closeActus').click (function (e){
    e.preventDefault();
    $('#actusContainer').fadeOut('fast');
    setTimeout(setActusClose, 300);
  });

  $('#homeContainer').click (function (e){
    if ( isActuClosed ) { 
      $('#actusContainer').fadeIn('fast');
      isActuClosed = false;
    } else {
      return false;
    }
  });

  function setActusClose(){
    isActuClosed = true;
  }


  // MOBILE MENU
  if (window.innerWidth <= 568) {
    $("#mainMenu").hide();
    $("#mobileToggle").show();
    $('#mobileToggle').on('click touch', function () {
      $('#mainMenu').toggle();
    });
}

});