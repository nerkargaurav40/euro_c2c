<div class="container-fluid content pb-5 mt-5">
    <div class="white_box">
      <div class="title text-center">
        <h1>Employee Details</h1>
      </div>
        <?php echo form_open('',array('id' => 'frm_emp', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
            <div class="alert alert-danger alert_position" style="display: none;" >
                <p class="error_message"></p>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6 mt-3">
                <label class="form_label">Employee Name <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="empName" id="empName" placeholder="Enter your name">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                <label class="form_label">Employee Code <span style="color:red;">*</span></label>
                <input type="text" class="form-control" name="empCode" id="empCode" placeholder="Enter your employee code">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                <label class="form_label">Vertical</label>
                <select class="form-control form-select" name="empVertical" id="empVertical">
                    <option value="">Please Select</option>
                    <option value="Direct Sales">Direct Sales</option>
                    <option value="Forbes Pro">Forbes Pro</option>
                    <option value="Retail">Retail</option>
                    <option value="Corporate">Corporate</option>
                    <option value="E-Commerce">E-Commerce</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="R&D">R&D</option>
                    <option value="Service and CRM">Service and CRM</option>
                    <option value="HR">HR</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Supply Chain and logistics">Supply Chain and logistics</option>
                    <option value="IT">IT</option>
                    
                </select>
                </div><!-- col -->

                <!-- <div class="col-sm-6 mt-3">
                <label class="form_label">Designation</label>
                <input type="text" class="form-control" name="empDesignation" id="empDesignation" placeholder="Enter your designation">
                </div> --><!-- col -->

                <div class="col-sm-6 mt-3">
                <label class="form_label">Phone Number</label>
                <input type="text" class="form-control" name="empPhone" id="empPhone" minlength="10" maxlength="10" placeholder="Enter your phone number">
                </div><!-- col -->
                <!-- <div class="col-sm-6 mt-3">
                <label class="form_label">Captcha Code</label>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><?php echo $captcha['number']; ?></span>
                    <input type="text" class="form-control" name="captcha" id="captcha"  placeholder="Enter captcha">
                    <input type="hidden" name="cpatchaVal" id="cpatchaVal" value="<?php echo $captcha['val']; ?>" />
                  </div>
                  
                </div> -->
                

            </div><!-- row -->

            <div class="text-center mt-5">
                <button class="btn_blue_color" type="submit" >Submit</button>
            </div>
        <?php echo form_close(); ?>

      <div class="mandatory_field">
        <h6>All the fields are mandatory</h6>
      </div>
    </div><!-- white_box -->
  </div><!-- content -->