<input type="hidden" id="basepath" value="<?php echo base_url(); ?>">
<h2 class="">Service Request Data</h2>
<?php echo form_open(ADMIN_FOLDER_NAME . '/servicerequest', array('id' => 'frm_waterpurifier', 'class' => '', 'role' => 'form')) ?>
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

    
    <button type="button" class="btn_blue btn_download" ><span>Download</span></button>
    
</div>
<!--</form>-->

<div class="table_box extra-margin-top-30">
    <div class="table-responsive table_hrscroll">
        <table class="table table-striped">
            <thead class="table_head">
                <tr>
                    <th>Sr. No.</th>
                    <th>Employee Name</th>
                    <th>Employee Code</th>
                    <th>Employee Phone</th>
                    <th>Employee Vertical</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Phone</th>
                    <th>Customer Pincode</th>
                    <th>Customer State</th>
                    <th>Customer City</th>
                    <th>Customer Code</th>
                    
                    
                    <?php 
                        foreach($questions as $key => $val)
                        {
                            echo '<th>'.$val['questionTxt'].'</th>';
                        }
                    ?>

                    

                    
                </tr>
            </thead>
            <tbody>
               <?php 
                    $cnt = 1;
                    
                    if($records){
                    foreach($records as $k => $value)
                    {
                        $result = $this->db->get_where('tbl_customer_answers',array('custID' => $value->custID,'empID'=>$value->empId,'questionCategory' => '3'))->result_array();
                        if(!empty($result)){
                ?>
                        <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $value->empName; ?></td>
                        <td><?php echo $value->empCode; ?></td>
                        <td><?php echo $value->empPhoneNumber; ?></td>
                        <td><?php echo $value->empVertical; ?></td>
                        <td><?php echo $value->custName; ?></td>
                        <td><?php echo $value->custEmail; ?></td>
                        <td><?php echo $value->custPhoneNumber; ?></td>
                        <td><?php echo $value->custPincode; ?></td>
                        <td><?php echo $value->custState; ?></td>
                        <td><?php echo $value->custCity; ?></td>
                        <td><?php echo $value->custCode; ?></td>
                       
                        <?php 
                            $this->db->cache_delete();
                            //$result = getCustomerAnswers($value->custID,$value->empId);
                            foreach($questions as $k =>  $v)
                            {
                                $response = $this->db->get_where('tbl_customer_answers',array('custID' => $value->custID,'empID'=>$value->empId,'questionCategory' => '3','questionTxt' => $v['questionTxt']))->row_array();
                                //echo '<pre>';print_r($response);
                                if(!empty($response) && $response['isSpecify']==0){
                ?>
                                <td><?php echo $response['selectedOption']; ?></td>
                <?php
                                }else if(!empty($response) && $response['isSpecify']==1){
                ?>
                                    <td><?php echo $response['textAnswer']; ?></td>
                <?php

                                }else{
                                    echo '<td></td>';
                                } 
                            }
                        $cnt++;
                        echo '</tr>';
                        }
                    }
                    
                }
                ?>
            </tbody>
        </table>

    </div><!-- table responsive -->
</div>

<?php if ($records !== FALSE) : ?>
    <nav aria-label="Page navigation example" class="paging_wrap extra-padding-top-40 extra-margin-bottom-30">
        <ul class="pagination "><?php //echo $links; ?></ul><br class="clear" /></nav>
<?php endif; ?>
<script>
    var b_url = '<?php echo base_url(); ?>';
    $(document).on('click','.btn_download',function(){
        
        var date_from = $('#date_from').val();
        var date_to = $('#date_to').val();
        window.location.href=b_url+'entertheadmin/downloadCategoryExcel?category=3&date_to='+date_to+'&date_from='+date_from;

    });
</script>