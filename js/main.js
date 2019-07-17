$( document ).ready(function() {
  $(".en").hide();

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

  // SMOOTH SCROLL 
    var positionY = 0;

    $('#arrowDown').on('click', function() {
      scrollTo( $("#bioContent") );
    });

    $('#arrowPlus').on('click', function() {
      positionY += 200;
      $('#Actus').animate({scrollTop: positionY}, 800);
    });

    $('#arrowPlusPresse').on('click', function() {
      positionY += 400;
      $('#Actus').animate({scrollTop: positionY}, 800);
    });

  function scrollTo( target ) {
    if( target.length ) {
        $("html, body").stop().animate( { scrollTop: target.offset().top }, 800);
      }
  }

  //LANGUAGE TOGGLE
    $('#enToggle').on('click', function() {
      $('.fr').hide();
      $('.en').show();
    });

    $('#frToggle').on('click', function() {
      $('.en').hide();
      $('.fr').show();
    });

});