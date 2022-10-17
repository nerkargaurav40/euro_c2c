<div class="menu-tab">
      <div id="one"></div>
      <div id="two"></div>
      <div id="three"></div>
  </div>
    <?php
        $admin_role = $this->session->userdata('role');
        $user_id = $this->session->userdata('user_id');
        $menu = $this->uri->segment(2);
    ?>
  <div id="left_menu" class="menu-hide equal_height">
    <nav>
      <ul>
        <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/dashboard"); ?>"><i class="icon-dashboard"></i> Dashboard</a></li>
        
            
            <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/employees"); ?>" <?php echo ($menu == 'employees' || $menu == 'employees') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Employees</a></li>
            <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/customers"); ?>" <?php echo ($menu == 'customers' || $menu == 'customers') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Customers</a></li>
            <!-- <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/importpartners"); ?>" <?php echo ($menu == 'importpartners' || $menu == 'importpartners') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Import Partners</a></li> -->

            <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/waterpurifier"); ?>" <?php echo ($menu == 'waterpurifier' || $menu == 'waterpurifier') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Water Purifier Product Questionnaire</a></li>

            <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/vacuumcleaner"); ?>" <?php echo ($menu == 'vacuumcleaner' || $menu == 'vacuumcleaner') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Vacuum Cleaner Product Questionnaire</a></li>

            <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/servicerequest"); ?>" <?php echo ($menu == 'servicerequest' || $menu == 'servicerequest') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Service Request Questionnaire</a></li>

            <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/installationrequest"); ?>" <?php echo ($menu == 'installationrequest' || $menu == 'installationrequest') ? 'class="active"' : ''; ?>><i class="icon-icon-admins"></i> Installation Request Questionnaire</a></li>
        
        <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/logout"); ?>"><i class="icon-logout"></i> Logout</a></li>
      </ul>
    </nav>
  </div>