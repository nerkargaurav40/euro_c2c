<input type="hidden" id="basepath" value="<?php echo base_url(); ?>">
<h2 class="">Import Details</h2>




<div class="row">
    <?php echo form_open_multipart(ADMIN_FOLDER_NAME . '/importExcel', array('id' => 'frm_importExcel', 'class' => '', 'role' => 'form')) ?>
    <div class="col-md-12 extra-margin-top-30">            
        <input type="file" required class="form-control" id="fileUpload" name="fileUpload" placeholder="name@example.com">
    </div>
    <div class="col-md-12 extra-margin-top-30">            
        <input type="submit" class="btn_blue btn_download" id="btnSubmit" name="btnSubmit" value="Submit">
    </div>
    <?php echo form_close(); ?>
</div>

<div class="table_box extra-margin-top-30">
    <div class="table-responsive table_hrscroll">
        


    </div><!-- table responsive -->
</div>

