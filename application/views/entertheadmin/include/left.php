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
        
        <li><a href="<?php echo site_url(ADMIN_FOLDER_NAME."/logout"); ?>"><i class="icon-logout"></i> Logout</a></li>
      </ul>
    </nav>
  </div>