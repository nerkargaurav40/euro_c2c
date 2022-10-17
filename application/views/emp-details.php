

<body class="landing_page">
<div id="header_end">
    <div class="logo">
      <a href="<?php echo base_url(); ?>"><img src="<?php echo SITE_URL; ?>assets/images/logo-big.png" class="img_responsive" alt="Euro C2C"></a>
    </div>

    <div class="logo2">
      <a href="<?php echo base_url(); ?>"><img src="<?php echo SITE_URL; ?>assets/images/logo-eureka.png" class="img_responsive" alt=""></a>
    </div>
  </div><!-- header -->

<div class="content_emp_details mt-5 mb-4">
  <a href="<?php echo base_url(); ?>" class="btn_back_to_home"><img src="<?php echo SITE_URL; ?>assets/images/prev.png"> Back to Home</a>


  <div class="text-center">
  <div class="emp_name_code_row">
    <div class="emp_name">
      Emp. Name : &nbsp;<span><?php echo $empDetails[0]['empName']; ?></span>
    </div>
    <div class="emp_code_box">
      Emp. Code : &nbsp;<span><?php echo $_SESSION['partnerID']; ?></span>
    </div>
  </div><!-- emp_name_code_row -->
</div>
<div class="tabs nav nav-pills mb-3" id="pills-tab" role="tablist">
    <?php 
      //echo '<pre>';print_r($isService);print_r($isSale);print_r($empDetails);die('sad');
      if(in_array(0, $isService))
      {
    ?>
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Service Partner</button>
    <?php
      }
      if(in_array(0,$isSale)){
    ?>
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sales Partner</button>
    <?php 
      }
    ?>
 
</div>

<div class="tab-content mt-5" id="pills-tabContent">  
<div class="container-fluid">
<div class="table_box">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    
      <div class="your-class">
        <?php 
        foreach($empDetails as $key => $value){
          if($value['serviceBusinessPartnerName'] !='' && $value['serviceBusinessPartnerAddress'] !='' && $value['serviceBusinessPartnerMobileNumber'] !='')
          {
        ?>
        <div class="item">
            <div class="row">
              

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-building.svg">
                    <div>
                      <h6>Service Business Partner Name</h6>
                      <p><?php echo $value['serviceBusinessPartnerName']; ?></p>
                    </div>
                  </div>
              </div><!-- col -->
              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-location.svg">
                    <div>
                      <h6>Service Business Partner Address</h6>
                      <p><?php echo $value['serviceBusinessPartnerAddress']; ?></p>
                    </div>
                  </div>                          
              </div><!-- col -->
            </div><!-- row -->

            <div class="row">
              

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-phone.svg">
                    <div>
                      <h6>Service Business Partner Mobile Number</h6>
                      <p><?php echo $value['serviceBusinessPartnerMobileNumber']; ?></p>
                    </div>
                  </div>                          
              </div><!-- col -->
            </div>
        </div><!-- item -->
    <?php }} ?>
        <!-- <div class="item">
            <div class="row">
              <div class="col-sm-6 tab_table_content">
                <div class="tab_table_row first_tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-user.svg">
                    <div>
                      <h6>Employee Name</h6>
                      <p>Piyush Bansal</p>
                    </div>
                  </div>
              </div>

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-building.svg">
                    <div>
                      <h6>Service Business Partner Name</h6>
                      <p>JAI ENTERPRISES</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-location.svg">
                    <div>
                      <h6>Service Business Partner Address</h6>
                      <p>JAI ENTERPRISES JYOTI TANEJA 33/171 C NEW RAJA MANDI COLONY AGRA 282002</p>
                    </div>
                  </div>                          
              </div>

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-phone.svg">
                    <div>
                      <h6>Service Business Partner Mobile Number</h6>
                      <p>9909976235</p>
                    </div>
                  </div>                          
              </div>
            </div>
        </div> -->
      </div>
    </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
      <div class="your-class">
        <?php 
            foreach ($empDetails as $key => $value) {
                // code...
              if($value['salesExpertName'] !='' && $value['salesExpertType'] !='' && $value['salesExpertAddress'] !='' && $value['contactPerson'] !='' && $value['designation'] !='' && $value['contactMobilePerson'] !=''){
        ?>
        <div class="item">
           <div class="row">
              <div class="col-sm-6 tab_table_content">
                <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-user.svg">
                    <div>
                      <h6>Sales Expert Name</h6>
                      <p><?php echo $value['salesExpertName']; ?></p>
                    </div>
                  </div>
              </div><!-- col -->

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-building.svg">
                    <div>
                      <h6>Sales Expert Type</h6>
                      <p><?php echo $value['salesExpertType']; ?></p>
                    </div>
                  </div>
              </div><!-- col -->
            </div><!-- row -->

            <div class="row">
              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-location.svg">
                    <div>
                      <h6>CRC/FBP/Retail Store/Address</h6>
                      <p><?php echo $value['salesExpertAddress']; ?></p>
                    </div>
                  </div>                          
              </div><!-- col -->

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-user.svg">
                    <div>
                      <h6>Contact Person</h6>
                      <p><?php echo $value['contactPerson']; ?></p>
                    </div>
                  </div>
              </div><!-- col -->
            </div><!-- row -->

            <div class="row">
              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-designation.svg">
                    <div>
                      <h6>Designation</h6>
                      <p><?php echo $value['designation']; ?></p>
                    </div>
                  </div>
              </div><!-- col -->

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-phone.svg">
                    <div>
                      <h6>Mobile Number</h6>
                      <p><a href="tel:<?php echo $value['contactMobilePerson']; ?>"><?php echo $value['contactMobilePerson']; ?></a></p>
                    </div>
                  </div>
              </div><!-- col -->
            </div>
        </div><!-- item -->
    <?php }} ?>
        <!-- <div class="item">
            <div class="row">
              <div class="col-sm-6 tab_table_content">
                <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-user.svg">
                    <div>
                      <h6>Sales Expert Name</h6>
                      <p>ROOP SONS</p>
                    </div>
                  </div>
              </div>

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-building.svg">
                    <div>
                      <h6>Sales Expert Type</h6>
                      <p>FBP</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-location.svg">
                    <div>
                      <h6>Sales Expert Office/Store Address</h6>
                      <p>20/18, SIR KI MANDI, LOHA MANDI,AGRA - 282002</p>
                    </div>
                  </div>                          
              </div>

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-user.svg">
                    <div>
                      <h6>Contact Person</h6>
                      <p>MANGE RAM</p>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-designation.svg">
                    <div>
                      <h6>Designation</h6>
                      <p>Zonal Head</p>
                    </div>
                  </div>
              </div>

              <div class="col-sm-6 tab_table_content">
                  <div class="tab_table_row">
                    <img src="<?php echo SITE_URL; ?>assets/images/icon-phone.svg">
                    <div>
                      <h6>Mobile Number</h6>
                      <p><a href="tel:9758321949">9758321949</a></p>
                    </div>
                  </div>
              </div>
            </div>
        </div> -->
      </div>
    </div>
</div>
</div>
</div>
<script>
  $(document).ready(function(){
  $('.your-class').slick({
    dots: false,
    arrows:true,
    infinite: false,
    autoplay: false,
  });


});

$('button[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
  $('.your-class').slick('setPosition');
})



</script>

