<input type="hidden" id="basepath" value="<?php echo base_url(); ?>">
<h2 class="mb-3">Dashoard</h2>



<div class="dashboard_content container-fluid pb-3 mt-5"> 
    <div class="row mt-2">
        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="dashboard_col">
                <div class="dashboard_col_inner">
                    <h2><?php echo count($waterpurifier); ?></h2>
                    <p>Water Purifier Product Questionnaire</p>
                </div>
                <div class="dashboard_col_footer">
                    <a href="<?php echo site_url(ADMIN_FOLDER_NAME."/waterpurifier"); ?>">View Details</a>
                </div>
            </div><!-- dashboard_col -->
        </div><!-- col -->

        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="dashboard_col">
                <div class="dashboard_col_inner">
                    <h2><?php echo count($vacuumcleaner); ?></h2>
                    <p>Vacuum Cleaner Product Questionnaire</p>
                </div>
                <div class="dashboard_col_footer">
                    <a href="<?php echo site_url(ADMIN_FOLDER_NAME."/vacuumcleaner"); ?>">View Details </a>
                </div>
            </div><!-- dashboard_col -->
        </div><!-- col -->

        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="dashboard_col">
                <div class="dashboard_col_inner">
                    <h2><?php echo count($service); ?></h2>
                    <p>Service Request Questionnaire</p>
                </div>
                <div class="dashboard_col_footer">
                    <a href="<?php echo site_url(ADMIN_FOLDER_NAME."/servicerequest"); ?>">View Details </a>
                </div>
            </div><!-- dashboard_col -->
        </div><!-- col -->

        <div class="col-sm-6 col-lg-3 mt-3">
            <div class="dashboard_col">
                <div class="dashboard_col_inner">
                    <h2><?php echo count($installation); ?></h2>
                    <p>Installation Request Questionnaire</p>
                </div>
                <div class="dashboard_col_footer">
                    <a href="<?php echo site_url(ADMIN_FOLDER_NAME."/installationrequest"); ?>">View Details </a>
                </div>
            </div><!-- dashboard_col -->
        </div><!-- col -->
    </div><!-- row -->
 </div><!-- content -->

