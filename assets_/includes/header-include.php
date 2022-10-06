<!-- JS -->
<link rel="icon" type="image/x-icon" href="favicon.png">
<link rel="stylesheet" href="css/animate.min.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />

<!-- JS -->
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script src="js/jquery.nice-select.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
	$('select:not(.ignore)').niceSelect();


/***Custom File Input***/
'use strict';

;( function ( document, window, index )
{
  var inputs = document.querySelectorAll( '.inputfile' );
  Array.prototype.forEach.call( inputs, function( input )
  {
    var label  = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener( 'change', function( e )
    {
      var fileName = '';
      if( this.files && this.files.length > 1 )
        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
      else
        fileName = e.target.value.split( '\\' ).pop();

      if( fileName )
        label.querySelector( 'span' ).innerHTML = fileName;
      else
        label.innerHTML = labelVal;
    });

    // Firefox bug fix
    input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
    input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
  });
}( document, window, 0 ));      
	});
</script>