<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo SITE_NAME; ?></title>
  <link rel="icon" href="/fevicon.png" type="image" sizes="32x32">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="shortcut icon" href="favicon.ico" type="<?php echo SITE_ASSETS; ?>image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>css/bootstrap-datetimepicker.css" />
  <link rel="stylesheet" href="<?php echo SITE_ASSETS; ?>css/style.css" />
  <!--JS-->
  <script src="<?php echo SITE_ASSETS; ?>js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/form/jquery.form.js"></script>
  <!-- Plugin Scripts -->
  <script src="<?php echo SITE_ASSETS; ?>js/dist/jquery.validate.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/blockui/jquery.blockUI.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/modernizr.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/bootstrap-datetimepicker.js"></script>
  <script src="<?php echo SITE_ASSETS; ?>js/main.js"></script>

  
  <style>
    input[type='text'].error, input[type='password'].error, textarea.error,  select.error{ 
        border: 1px solid #B94A48 !important;
    }
    label.error {
        color:#B94A48;
        display:none;    
    }
    </style>
  <script>
    
   var b_url = '<?php echo base_url(); ?>';
  

     /* $("#frm_login").validate({    
          errorPlacement: function(error,element) { return true; },
          submitHandler: function(form) {
            form.submit();
          }
          //,         
          <?php /*submitHandler: function(form) {
              $("#frm_login").ajaxSubmit({target: '#response', beforeSubmit: function (formData, jqForm, options) {
                  // console.log("before: ", formData);
                  // $.each(formData, function(k,v){
                  //   if(v['name'] == 'username' || v['name'] == 'password') {
                  //     v['value'] = mystring(v['value']);
                  //   }
                  // });   
                  // console.log("after: ", formData);           
                    $.blockUI({message:  ''});
                  }, clearForm: false, dataType: 'json', success: function (resObj, statusText) {
                      $.unblockUI();
                      if (resObj.status) {                               
                          $('.alert').hide();
                          $('.success_message').html(resObj.htmlcontents).parent().show();                                                   
                          setTimeout(function(){ window.location = '<?php echo site_url(ADMIN_FOLDER_NAME.'/dashboard'); ?>';}, 1000); 
                      } else {    
                          //
                          $('.alert').hide();
                          $('.error_message').html(resObj.htmlcontents).parent().show();
                          setTimeout(function(){ $('.error_message').parent().hide();}, 5000);
                      }
                  }
              });
          }*/ ?>
      }); */
  </script>
</head>

<body class="login_body">
<?php echo form_open('',array('id' => 'frm_login', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
  <div id="login_wrapper">
    <div class="container-fluid">
      <div class="login_logo">
        <img src="<?php echo SITE_ASSETS; ?>images/logo-login.png" />
      </div>
        
      <div class="form_box">
        <?php $errorText = $this->session->flashdata('error'); ?>
        <div class="alert alert-danger alert_position"  >
            <p class="error_message"><?php echo $errorText; ?></p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <input type="text" class="form-control" placeholder="User Name" name="username" id="username"  />
          </div>
        </div><!-- row -->
        <div class="row extra-margin-top-30">
          <div class="col-md-12">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password"  />
          </div>
         
        </div><!-- row -->

        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn_login full_width" ><span>Login</span></button>
          </div>
        </div><!-- row -->
      </div>
    </div>
 </div><!-- Login wrapper -->
 <?php echo form_close(); ?>
</body>
</html>
