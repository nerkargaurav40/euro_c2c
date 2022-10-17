<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Eureka Forbes</title>
<!-- JS -->
<link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>assets/images/favicon.png">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/animate.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/slick.css" />
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css" />

<!-- JS -->
<script type="text/javascript" src="<?php echo SITE_URL; ?>assets/js/jquery-3.6.0.min.js"></script> 
<script src="<?php echo SITE_URL; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo SITE_URL; ?>assets/js/slick.min.js"></script>
<script src="<?php echo SITE_URL; ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo SITE_ASSETS; ?>js/dist/jquery.validate.js"></script>
<script src="<?php echo SITE_ASSETS; ?>js/main.js"></script>


<script type="text/javascript">
    var b_url='<?php echo SITE_URL; ?>';
$(document).ready(function(){
	//$('select:not(.ignore)').niceSelect();


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
<style type="text/css">
  .tabs{width: 100%;}

 .nav-pills .nav-link{width: 50%;border-radius: 60px;}

</style>
</head>

<body>
  <?php 
  if($this->uri->segment(2) !='searchPartnersByID'){
  ?>
<div id="header">
  <div id="logo">
    <a href="<?php echo base_url(); ?>"><img src="<?php echo SITE_URL; ?>assets/images/logo.png" class="img_responsive" alt="Euro C2C"></a>
  </div>
</div><!-- header -->
<?php } ?>