<div class="content_emp_details mt-5">
    <div class="table_box">
        <?php 
            if(isset($empDetails) && !empty($empDetails))
            {
        ?>
        <div class="title_emp_code_row">
            
            <div class="title_col">
                <h1><?php echo $empDetails['empName']; ?></h1>
            </div>
            <div class="emp_code">
                <p>Employee Code</p>
                <h5><?php echo $empDetails['empCode']; ?></h5>
            </div>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table_employee">
                <thead>
                    <tr>
                        <th>Partner Name</th>
                        <th>Partner Address</th>
                        <th>Partner Mobile Number</th>
                        <th>Sales Expert Name</th>
                        <th>Expert Type</th>
                        <th>Expert Address</th>
                        <th>Contact Person</th>
                        <th>Designation</th>
                        <th>Contact Person Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td><span><i class="icon-user"></i> Puneet Mehta</span></td>
                        <td><span><i class="icon-sale"></i> Sale</span></td>
                        <td><a href="tel:8080002327"><i class="icon-phone"></i> 8080002327</a></td>
                    </tr> -->
                    <tr>
                        <td><?php echo $empDetails['serviceBusinessPartnerName']; ?></td>
                        <td><?php echo $empDetails['serviceBusinessPartnerAddress']; ?></td>
                        <td><?php echo $empDetails['serviceBusinessPartnerMobileNumber']; ?></td>
                        <td><?php echo $empDetails['salesExpertName']; ?></td>
                        <td><?php echo $empDetails['salesExpertType']; ?></td>
                        <td><?php echo $empDetails['salesExpertAddress']; ?></td>
                        <td><?php echo $empDetails['contactPerson']; ?></td>
                        <td><?php echo $empDetails['designation']; ?></td>
                        <td><?php echo $empDetails['contactMobilePerson']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- table-resposive -->
        <?php 
            }else{
        ?>
        <div class="title_emp_code_row">
            <div class="title_col">
                <h1>Record No Found</h1>
            </div>
            <div class="emp_code">
                <a style="text-decoration: none;color: #fff;" href="<?php echo base_url('home/logout'); ?>" class="btn_blue_color btnRedirect">Go to home page</a>
            </div>
        </div>
        <?php 
            }
        ?>
    </div>
</div><!-- content_emp_details -->
