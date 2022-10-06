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
        $user_id = $admin_data['emp_id'];
        

		if (!$user_id) {			
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
			redirect(base_url('customer-details'));			
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
	$op=$ops[rand(0,1)];
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

function getQuestion()
{
	return '{
		
		  "question_1": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_2": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_3": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_4": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_5": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_6": {
			"isopenBox":"1",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
		  "question_7": {
			"isopenBox":"0",
			"options_1": "A",
			"options_2": "B",
			"options_3": "C",
			"options_4": "D"
			
		  },
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
		
	  }';
}

