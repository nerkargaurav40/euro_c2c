<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/select2.min.css" />



<script src="<?php echo SITE_URL; ?>assets/js/select2.min.js"></script>

<style type="text/css">


/*
.select2-container {

  min-width: 400px;

}*/



.select2-results__option {

  padding-right: 10px;

  vertical-align: middle;

}

.select2-results__option:before {

  content: "";

  display: inline-block;

  position: relative;

  height: 20px;

  width: 20px;

  border: 2px solid #e9e9e9;

  border-radius: 4px;

  background-color: #fff;

  margin-right: 20px;

  vertical-align: middle;

}

.select2-results__option[aria-selected=true]:before {

  /*font-family:fontAwesome;*/

  content: "✓";

  color: #fff;

  background-color: #17558f;

  border: 0;
  line-height: 20px;
  display: inline-block;

  padding-left: 3px;

}

.select2-container--default .select2-results__option[aria-selected=true] {

    background-color: #fff;

}

.select2-container--default .select2-results__option--highlighted[aria-selected] {

    background-color: #eaeaeb;

    color: #272727;

}

.select2-container--default .select2-selection--multiple {

    margin-bottom: 10px;

}

.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {

    border-radius: 4px;

}

.select2-container--default.select2-container--focus .select2-selection--multiple {

    border-color: #f77750;

    border-width: 0px;

}

.select2-container--default .select2-selection--multiple {

    border-width: 0px; background-color: rgb(244, 244, 244);

}

.select2-container--open .select2-dropdown--below {

    

    border-radius: 4px;

    box-shadow: 0 0 10px rgba(0,0,0,0.5);



}

.select2-selection .select2-selection--multiple:after {

    content: 'hhghgh';

}

/* select with icons badges single*/

.select-icon .select2-selection__placeholder .badge {

    display: none;

}

.select-icon .placeholder {

    display: none;

}

.select-icon .select2-results__option:before,

.select-icon .select2-results__option[aria-selected=true]:before {

    display: none !important;

    /* content: "" !important; */

}

.select-icon  .select2-search--dropdown {

    display: none;

}

</style>

<div class="container-fluid content pb-5 mt-5">

    <div class="white_box">

        <div class="title text-center">

            <h1>Customer Details</h1>

        </div>

        <?php echo form_open('',array('id' => 'frm_customer', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>

            <div class="row mt-3">

                <div class="col-sm-6 mt-3">

                    <label class="form_label">Name<span style="color:red;"> *</span></label>

                    <input type="text" class="form-control" name="custName" id="custName" placeholder="Enter customer name">

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">Mobile Number<span style="color:red;"> *</span></label>

                    <input type="text" class="form-control" minlength="10" maxlength="10" name="custMobile" inputmode="numeric" id="custMobile" placeholder="Enter customer mobile number">

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">Email Id</label>

                    <input type="email" class="form-control" name="custEmail" id="custEmail" placeholder="Enter customer email id">

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">Pincode <span style="color:red;">*</span></label>

                    <input type="text" class="form-control custPincode" minlength="6" maxlength="6" name="custPincode" id="custPincode" placeholder="Enter customer Pincode">

                    <p class="error_message" style="color: red;"></p>


                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">State</label>

                    <input type="text" class="form-control" readonly name="custState" id="custState" placeholder="">

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">City</label>

                    <input type="text" class="form-control" readonly name="custCity" id="custCity" placeholder="">

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">Customer Code</label>

                    <input type="text" class="form-control"  name="custCode" id="custCode" placeholder="Enter customer code">

                </div><!-- col -->



                



                <div class="col-sm-6 mt-3">

                    <label class="form_label">Gender</label>

                    <select class="form-control form-select" name="custSex" id="custSex">

                        <option value="">Please Select</option>

                        <option value="Male">Male</option>

                        <option value="Female">Female</option>

                        <option value="Other">Other</option>

                    </select>

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">No. of members in the family</label>

                    

                    <select class="form-control form-select" name="custNomember" id="custNomember">

                        <option value="">Please Select</option>

                        <?php 

                            for ($i=1; $i <= 20 ; $i++) { 

                        ?>

                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>

                        <?php 

                            }

                        ?>

                    </select>

                </div><!-- col -->



                <div class="col-sm-6 mt-3">

                    <label class="form_label">EFL product owned</label>

                    <select class="form-control form-select js-select2" multiple="multiple" name="custEFL[]" id="custEFL">

                        

                        <option value="Water Purifier" data-badge="">Water Purifier</option>

                        <option value="Air Purifier" data-badge="">Air Purifier</option>

                        <option value="Vacuum Cleaner" data-badge="">Vacuum Cleaner</option>              

                        <option value="Other" data-badge="">Other</option>

                        <option value="None" data-badge="">None</option>

                    </select>

                </div><!-- col -->

                <div class="col-sm-6 mt-3">

                    <label class="form_label">Visit Type</label>

                    

                    <select class="form-control form-select" name="custVisitType" id="custVisitType">

                        <option value="">Please Select</option>

                        <option value="Water Purifier Demo">Water Purifier Demo</option>

                        <option value="Vacuum Cleaner Demo">Vacuum Cleaner Demo</option>

                        <option value="Service Visit">Service Visit</option>

                        <option value="Installation Visit">Installation Visit</option>

                        

                        

                        

                    </select>

                </div><!-- col -->



                <!-- <div class="col-sm-6 mt-3">

                    <label class="form_label">No. of members in the family</label>

                    <div class="custom_file_input">

                        <input type="file" name="file-7[]" id="file-7" class="inputfile" data-multiple-caption="{count} files selected" multiple style="opacity: 0; position: absolute;" />

                        <label for="file-7"><span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Upload</strong></span></label>

                    </div>

                </div> -->

            </div><!-- row -->

            <div class="text-center mt-5">

                <button class="btn_blue_color" type="submit">Start Survey</button>

            </div>

        <?php echo form_close(); ?>

        <div class="mandatory_field">

            

        </div>

    </div><!-- white_box -->

  </div><!-- content -->
  <script type="text/javascript">
    $(".js-select2").select2({
            closeOnSelect : false,
            placeholder : "",
            allowHtml: true,
            allowClear: true,
            tags: true // создает новые опции на лету
        });
</script>