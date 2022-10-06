<div class="container-fluid content pb-5 mt-5">
    <div class="white_box">
        <div class="title text-center">
            <h1>Customer Details</h1>
        </div>
        <?php echo form_open('',array('id' => 'frm_customer', 'class'=> '', 'role'=>'form', 'autocomplete' => "off",'onSubmit'=>"return false;")) ?>
            <div class="row mt-3">
                <div class="col-sm-6 mt-3">
                    <label class="form_label">Name</label>
                    <input type="text" class="form-control" name="custName" id="custName" placeholder="Enter your name">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                    <label class="form_label">Mobile Number</label>
                    <input type="text" class="form-control" minlength="10" maxlength="10" name="custMobile" id="custMobile" placeholder="Enter your phone number">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                    <label class="form_label">Email Id</label>
                    <input type="email" class="form-control" name="custEmail" id="custEmail" placeholder="Enter your email id">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                    <label class="form_label">Location (City)</label>
                    <input type="text" class="form-control" name="custLocation" id="custLocation" placeholder="Enter your Location">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                    <label class="form_label">Age</label>
                    <input type="text" class="form-control" minlength="1" maxlength="3" name="custAge" id="custAge" placeholder="Enter your age">
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
                    <input type="text" class="form-control" name="custNomember" id="custNomember" placeholder="Enter your family members">
                </div><!-- col -->

                <div class="col-sm-6 mt-3">
                    <label class="form_label">EFL product owned</label>
                    <select class="form-control form-select" name="custEFL" id="custEFL">
                        <option value="">Please Select</option>
                        <option>Water Purifier</option>
                        <option>Air Purifier</option>
                        <option>Vacuum Cleaner</option>              
                        <option>Other</option>
                        <option>None</option>
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
            <h6>All the fields are mandatory</h6>
        </div>
    </div><!-- white_box -->
  </div><!-- content -->