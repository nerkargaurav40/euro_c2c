<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Eureka Forbes</title>
<!-- JS -->
<link rel="icon" type="image/x-icon" href="<?php echo SITE_URL; ?>assets/favicon.png">
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/animate.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css" />

<!-- JS -->
<script type="text/javascript" src="<?php echo SITE_URL; ?>assets/js/jquery-3.6.0.min.js"></script> 
<script src="<?php echo SITE_URL; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo SITE_URL; ?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo SITE_ASSETS; ?>js/dist/jquery.validate.js"></script>
<script src="<?php echo SITE_ASSETS; ?>js/main.js"></script>

<script type="text/javascript">
    var b_url='<?php echo SITE_URL; ?>';
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
</head>

<body class="landing_page">
<div id="header_end">
  <div id="logo">
    <img src="<?php echo SITE_URL; ?>assets/images/logo2.png" class="img_responsive" alt="Euro C2C">
  </div>
</div><!-- header -->
<div class="mobile_banner_landing">
  <img src="<?php echo SITE_URL; ?>assets/images/img-landing.jpg" class="img_responsive">
</div>
  <div class="banner_text">
    <p>Be simple and concise. 
    Be clear and direct in 
    your language....</p>
  </div>

  <div class="group_btns">
    <a href="#" class="btn_know_partner" data-bs-toggle="modal" data-bs-target="#PartnerModal">Know Your Partner</a>
    <a href="<?php echo SITE_URL; ?>home/emp" class="btn_csurvey">Customer Survey</a>
  </div>


<!-- Modal -->
<div class="modal fade" id="PartnerModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content"> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 
      <div class="modal-body">
        <?php echo form_open(SITE_URL.'home/searchPartnersByID',array('id' => 'frm_partner', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
            <div class="partner_modal_content">
                <input type="text" placeholder="Type Employee Code" name="empCode" id="empCode" class="form-control">
                <button type="submit" class="btn_submit_blue">Submit</button>
            </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<script>
    

</script>
</body>

</html>
