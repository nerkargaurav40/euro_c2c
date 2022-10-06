<input type="hidden" id="basepath" value="<?php echo base_url(); ?>">
<h2 class="">Employee Details</h2>
<?php echo form_open(ADMIN_FOLDER_NAME . '/employees', array('id' => 'frm_customerindex', 'class' => '', 'role' => 'form')) ?>
<div class="flex_spbt align_fe">
    <div class="date_filterbox">
        <div class="col_6 extra-padding-top-20">
            <div class="control-group">
                <div class="controls input-append date date_picker" data-date="<?php echo date('d M Y'); ?>" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
                    <input size="16" type="text" name="date_from" id="date_from" class="form-control" placeholder="Date From" value="<?php echo isset($date_from) && !empty($date_from) ? date('d M Y', strtotime($date_from)) : ''; ?>">
                    <span class="add-on"><i class="icon-calendar"></i></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" class="" />
            </div>
        </div><!-- col -->

        <div class="col_6 extra-padding-top-20">
            <div class="control-group">
                <div class="controls input-append date date_picker" data-date="<?php echo date('d M Y'); ?>" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
                    <input size="16" type="text" name="date_to" id="date_to" class="form-control" placeholder="Date To"  value="<?php echo isset($date_to) && !empty($date_to) ? date('d M Y', strtotime($date_to)) : '' ?>">
                    <span class="add-on"><i class="icon-calendar"></i></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" class="" />
            </div>
        </div><!-- col -->
        <button class="btn_go"  type="submit" name="search_term" value="Search"><i class="icon-search"></i></button>
    </div><!-- date_filterbox -->
<?php echo form_close(); ?>

    
    <button type="button" class="btn_blue btn_download" rel="emp"><span>Download</span></button>
   
</div>


<div class="table_box extra-margin-top-30">
    <div class="table-responsive table_hrscroll">
        <table class="table table-striped">
            <thead class="table_head">
                <tr>
                    <th>Sr. No.</th>
                    
                        <th>Emp Name</th>
                        <th>Emp Code</th>
                        <th>Emp Vertical</th>
                        <th>Emp Designation</th>
                        <th>Emp Phone Number</th>
                    

                    
                </tr>
            </thead>
            <tbody>
                <?php
                if ($records) {
                    $i = 1;
                    foreach ($records as $row) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row->empName; ?></td>
                            <td><?php echo $row->empCode; ?></td>
                            <td><?php echo $row->empVertical; ?></td>
                            <td><?php echo $row->empDesignation; ?></td>
                            <td><?php echo $row->empPhoneNumber; ?></td>
        
                            
                        </tr>
                        <?php
                        $i++;
                    }
                }
                ?> 
            </tbody>
        </table>

    </div><!-- table responsive -->
</div>

<?php if ($records !== FALSE) : ?>
    <nav aria-label="Page navigation example" class="paging_wrap extra-padding-top-40 extra-margin-bottom-30">
        <ul class="pagination "><?php echo $links; ?></ul><br class="clear" /></nav>
<?php endif; ?>

<script>
    var b_url = '<?php echo base_url(); ?>';
    $(document).on('click','.btn_download',function(){
        var searchType = $(this).attr('rel');
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        window.location.href=b_url+'entertheadmin/downloadExcel?searchType='+searchType+'&date_to='+date_to+'&date_from='+date_from;

    });
</script>
