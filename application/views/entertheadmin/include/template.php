<?php $page_name = 'dashboard' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Eureka</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="shortcut icon" href="favicon.ico" type="<?php echo SITE_ASSETS; ?>image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>css/bootstrap-datetimepicker.css" />
  <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>css/style.css" />
  <!--JS-->
  <script src="<?php echo SITE_ASSETS; ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/jquery-2.1.1.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/form/jquery.form.js"></script>
  <!-- Plugin Scripts -->
  <script src="<?php echo SITE_ASSETS; ?>js/validation/jquery.validate.min.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/blockui/jquery.blockUI.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/modernizr.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/bootstrap-datetimepicker.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/script.js"></script>
  
  
</head>

<body>
  <?php $this->load->view ('entertheadmin/Include/header')  ?>

  <div class="main_wrap">
    
      <?php $this->load->view ('entertheadmin/Include/left')  ?>
    
    <div id="right_contrainer" class="equal_height">
      <div class="container-fluid content extra-padding-top-30">
        <div class="alert alert-danger alert_position" style="display:none;" >
            <button class="close" >×</button>
            <h4>Error!</h4>
            <p class="error_message"></p>
        </div>
        <div class="alert alert-success alert_position" style="display:none;">
            <button class="close">×</button>
            <h4>Success!</h4>
            <p class="success_message"></p>
        </div>
        
        <?php if(isset($main_content)) $this->load->view($main_content)  ?>
      </div>
    </div><!-- content_right -->
  </div><!-- wrapper -->
</body>

</html>
