/***Equal Height***/
(function($){
  function fixButtonHeights() {
    var heights = new Array();
        
    // Loop to get all element heights
    $('.equal_height').each(function() { 
      // Need to let sizes be whatever they want so no overflow on resize
      $(this).css('min-height', '0');
      $(this).css('max-height', 'none');
      $(this).css('height', 'auto');

      // Then add size (no units) to array
      heights.push($(this).height());
    });

    // Find max height of all elements
    var max = Math.max.apply( Math, heights );

    // Set all heights to max height
    $('.equal_height').each(function() {
      $(this).css('height', max + 'px');
            // Note: IF box-sizing is border-box, would need to manually add border and padding to height (or tallest element will overflow by amount of vertical border + vertical padding)
    }); 
  }

  $(window).load(function() {
    // Fix heights on page load
    fixButtonHeights();

    // Fix heights on window resize
    $(window).resize(function() {
      // Needs to be a timeout function so it doesn't fire every ms of resize
      setTimeout(function() {
            fixButtonHeights();
      }, 120);
    });
  });
})(jQuery);

$(document).ready(function() {
 //Date/Time
  $('.datetime_picker').datetimepicker({
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    startView: 2,
    forceParse: 0,
    showMeridian: 1,
    autoClose: true,
    pickerPosition: "bottom-left"
    });

  $(".date_picker").datetimepicker({
      dateFormat: 'DD dd MM yy - ',
      altFieldTimeOnly: false,
      altFormat: 'dd-mm-yy',
      autoclose: 1,
      altField: "#hiddenField",
      autoClose: true,
      pickerPosition: "bottom-left",
      minView: 2
  });

$('.menu-tab').click(function(){
    $('.menu-hide').toggleClass('show');
    $('.menu-tab').toggleClass('active');
  });
  $('a').click(function(){
    $('.menu-hide').removeClass('show');
    $('.menu-tab').removeClass('active');
  });

});

