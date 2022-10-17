<?php
if (!function_exists('is_admin_logged_in')) {
	/**
	 * is_logged_in()<br />
	 * This function checks in session if the user is logged in. If not,
	 * then it redirects the user to the home page.
	 */
	function is_admin_logged_in() {
		$CI =& get_instance();
        $admin_data = $CI->session->userdata('admin_user');
        $is_verified = $CI->session->userdata('is_verified');
        $user_id = $admin_data['user_id'];
        $where_admin_logins = array('user_id' => $user_id);

		if ($admin_data['is_logged_in'] !== true || $admin_data['group_id'] > 1 || $is_verified == 0) {			
			redirect('/'.ADMIN_FOLDER_NAME);			
			return;
		}
	}
}

if (!function_exists('is_emp_logged_in')) {
	/**
	 * is_logged_in()<br />
	 * This function checks in session if the user is logged in. If not,
	 * then it redirects the user to the home page.
	 */
	function is_emp_logged_in() {
		$CI =& get_instance();
        $admin_data = $CI->session->userdata('empInfo');
        if(!empty($admin_data))
        {
        	$user_id = $admin_data['emp_id'];
	        if (!$user_id) {			
				redirect(base_url());			
				return;
			}
        }else{
        	redirect(base_url());			
			return;
        }
        
	}
}

if (!function_exists('is_emp_customer_logged_in')) {
	function is_emp_customer_logged_in()
	{
		$CI =& get_instance();
        $admin_data = $CI->session->userdata('empInfo');
        $user_id = $admin_data['emp_id'];
		$cust_id = $admin_data['custId'];
        

		if ($user_id && $cust_id) {			
			
		}else{
			redirect(base_url('home/emp'));			
			return;
		}
	}
}

function getCaptcha()
{
	$ops=["+","*"];
    $numbers=["0","1","2","3","4","5","6","7","8","9","10"];
	$n1= rand(0,10);
	$n2= rand(0,10);
	$op='+';//$ops[rand(0,1)];
	$data['number'] = $numbers[$n1]." ".$op." ".$numbers[$n2]." = ";
	$computed= eval('return '.$n2.$op.$n1.';');
	$data['val'] = $val=md5($computed);
	return $data;
}

function getCustomerAnswers($custID,$empID)
{
	$CI =& get_instance();
	$CI->db->where('custID',$custID);
	$CI->db->where('empID',$empID);
	return $result = $CI->db->get('tbl_customer_answers')->result_array();
}

function getWaterPurifierQuestion()
{
	return $arr = array('A1. Are you a first-time buyer or a repeat buyer?','A2. If you are a first-time buyer, how were you purifying your water before?','A3. What are the top 3 reasons for purchasing water purifier?','A4. What are the top 3 reasons for upgrading to a new water purifier?','A5. What are the top 3 reasons for you to consider Aquaguard over other brands?','A6. Please describe Aquaguard in One word?','A7. Any feedback for Aquaguard?');
	
}
function getVaccumQuestion()
{
	return $arr = array('A1. What are the top 3 reasons for you to consider a vacuum cleaner purchase?','A2. Please tell us where did you become aware of the Vacuum cleaner?','A3. What format of Vacuum Cleaner are you considering?','A4. Please tell us your reasons for choosing the particular format over another format available?','A5. What are the top 3 reasons that made you choose Eureka Forbes Vacuum Cleaner above other brands?','A6. Please describe Eureka Forbes Vacuum Cleaners in One word?','A7. Any feedback for Eureka Forbes Vacuum Cleaners?');
	
}
function getServiceQuestion()
{
	return $arr = array('A1. What type of service was availed?','A2. What is your preferred mode of placing a service request?','A3. Do you have an existing AMC?','A4. If you have an existing AMC. What are the top 3 reasons for considering Aquaguard AMC?','A5. If you don’t have an existing AMC. What are the top 3 reasons for not considering Aquaguard AMC?','A6. Ideally how many times in a year should the purifier be serviced?','A7. How long are you ready to wait for the actual service after you have placed a service request?','A8. How would you rate Aquaguard service?','A9. What is the one thing you would like to change in our service experience?');
	
}
function getInstallQuestion()
{
	return $arr = array('A1. Are you a first-time buyer of Eureka Forbes’s Water purifier product?','A2. If you are a first-time buyer, how were you purifying your water before?','A3. What are the top 3 reasons for purchasing water purifier?','A4. What are the top 3 reasons for upgrading to a new water purifier?','A5. How long were you using your old Water purifier before purchasing a new one?','A6. What is a reasonable wait time for installation post-delivery of your product?','A7. What would you rate our installation experience?','A8. You have rated the installation experience as “Poor” or ‘Fair”. Please tell us the reason for the same.');
	
}

function getShowQuestions()
{
	return '{"A":["4"],"B":["2,3"],"C":["5"],"D":["6,7"]}
		';
}
/*

		  "question_8": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_9": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_10": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_11": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_12": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_13": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_14": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_15": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  }
		  */
