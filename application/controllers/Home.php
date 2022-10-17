<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        /*$data['captcha'] = getCaptcha();
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');*/
        $this->load->view('index');
    }

    public function emp()
    {
        $data['captcha'] = getCaptcha();
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

    public function empDetails()
    {
        
        if(isset($_POST))
        {
            $this->form_validation->set_rules('empName','Employee Name','trim|required');
            $this->form_validation->set_rules('empCode','Employee Code','trim|required');
            /*$this->form_validation->set_rules('empVertical','Employee Vertical','trim|required');
            $this->form_validation->set_rules('empDesignation','Employee Designation','trim|required');
            $this->form_validation->set_rules('empPhone','Employee Phone','trim|required');
            $this->form_validation->set_rules('captcha','captcha','trim|required');*/
            if($this->form_validation->run()==FALSE)
            {
                $data = array(
                    'errors' => validation_errors()
                );
                echo json_encode(array('status' => 'error','error' => 'Please enter all details.'));
            }else{
                //echo '<pre>';print_r($_POST);die('sdf');
                /*if($_POST['cpatchaVal']!=md5($_POST['captcha']))
                {
                    echo json_encode(array('status' => 'error','error'=>'Invalid Captcha Value.'));
                }else{*/

                    
                    // check duplication record
                    $response = $this->common_model->getRow('tbl_employee',array('empCode' => $this->input->post('empCode'), 'status' => 1));
                    if(isset($response) && !empty($response))
                    {
                        /*$checkCustomer = $this->db->get_where('tbl_customer',array('addedBy' => $response['empId']))->result_array();
                        
                        if(count($checkCustomer) < 15)
                        {*/
                            $admin_user = array('emp_id' => $response['empId'],
                                'empname' => $response['empName']
                            
                            );
                            $this->session->set_userdata('empName',$response['empName']);
                            $this->session->set_userdata('empInfo',$admin_user);
                            $this->session->set_userdata('empId',$response['empId']);
                            echo json_encode(array('status' => 'success'));
                        /*}else{
                            
                            echo json_encode(array('status' => 'limiterror'));
                        }*/
                    }else{
                        $insData['empName'] = $this->input->post('empName');
                        $insData['empCode'] = $this->input->post('empCode');
                        $insData['empVertical'] = $this->input->post('empVertical');
                        $insData['empDesignation'] = $this->input->post('empDesignation');
                        $insData['empPhoneNumber'] = $this->input->post('empPhone');
                        $insData['dateAdded'] = date('Y-m-d H:i:s');

                        $result = $this->common_model->insertRecord('tbl_employee',$insData);
                        if(isset($result) && !empty($result))
                        {
                            $admin_user = array('emp_id' => $result,
                                'empname' => $insData['empName']
                                
                            );
                            $this->session->set_userdata('empName',$insData['empName']);
                            $this->session->set_userdata('empId',$result);
                            $this->session->set_userdata('empInfo',$admin_user);
                            echo json_encode(array('status' => 'success'));
                        }else{
                            echo json_encode(array('status' => 'error','error'=>'Record not Inserted.'));
                        }
                    }
                /*}*/
                

            }
            
        }else{
            redirect(base_url());
        }
        
    }

    public function customer_details()
    {
        is_emp_logged_in();
        $this->load->view('header');
        $this->load->view('customer-details');
        $this->load->view('footer');
    }

    public function custInsert()
    {
        if(isset($_POST))
        {
            
            $this->form_validation->set_rules('custName','Customer Name','trim|required');
            $this->form_validation->set_rules('custMobile','Customer Phone','trim|required');
            
            if($this->form_validation->run()==FALSE)
            {
                $data = array(
                    'errors' => validation_errors()
                );
                echo json_encode(array('status' => 'error','error' => 'Please enter all details.'));
            }else{
                $checkCustomer = $this->db->get_where('tbl_customer',array('addedBy' => $this->session->userdata('empId')))->result_array();
                        
                        if(count($checkCustomer) < 15)
                        {
                            $insData['custName'] = $this->input->post('custName');
                            $insData['custEmail'] = $this->input->post('custEmail');
                            $insData['custPhoneNumber'] = $this->input->post('custMobile');
                            $insData['custState'] = $this->input->post('custState');
                            $insData['custCity'] = $this->input->post('custCity');
                            $insData['custPincode'] = $this->input->post('custPincode');
                            $insData['custSex'] = $this->input->post('custSex');
                            $insData['custCode'] = $this->input->post('custCode');
                            $insData['custVisitType'] = $this->input->post('custVisitType');
                            $insData['custNoOfMemeberInFamily'] = $this->input->post('custNomember');
                            $insData['custEFL'] = (!empty($this->input->post('custEFL')))?implode(',',$this->input->post('custEFL')):'';
                            $insData['addedBy'] = $this->session->userdata('empId');
                            $insData['dateAdded'] = date('Y-m-d H:i:s');
                            $result = $this->common_model->insertRecord('tbl_customer',$insData);
                            if(isset($result) && !empty($result))
                            {
                                
                                $this->session->set_userdata('empInfo',array('custId' => $result,'empName'=>$this->session->userdata('empName'),'emp_id'=>$this->session->userdata('empId')));
                                echo json_encode(array('status' => 'success'));
                            }else{
                                echo json_encode(array('status' => 'error','error'=>'Record not Inserted.')); 
                            }
                        }else{
                            
                            echo json_encode(array('status' => 'limiterror'));
                        }
            }
        }else{
            redirect(base_url('customer-details'));
        }
    }

    public function quiz()
    {
        //echo '<pre>';print_r($_SESSION);
        $showQuestions = array("A"=>array("4"),"B" => array("2,3"),"C"=>array("5"),"D"=>array("6,7"));
        is_emp_customer_logged_in();
        $data['questions'] = json_decode(getQuestion());
        //$data['showQuestions'] = json_decode(getShowQuestions());
        $data['showQuestions'] = getShowQuestions();
        
        $this->load->view('header');
        $this->load->view('quiz',$data);
        $this->load->view('footer');
    }

    public function logout()
    {
        

        redirect(base_url('customer-details'));
    }

    public function logout1()
    {
        
        session_destroy();
        redirect(base_url());
    }

    public function limitexceeds()
    {
        $this->load->view('header');
        $this->load->view('limitexceeds');
        $this->load->view('footer');
    }
    public function searchpartner()
    {
        if(isset($_POST) && !empty($_POST))
        {
            $result = $this->common_model->getRows('tbl_partners',array('empCode' => $_POST['empCode'],'status' => 1));
            if($result)
            {
                $data['status'] = 'success';
                $_SESSION['partnerID'] = $_POST['empCode'];
            }else{
                $data['status'] = 'error';
            }
        }else{
            $data['status'] = 'error';
        }
        echo json_encode($data);exit();   
    }
    public function searchPartnersByID()
    {
        //echo '<pre>';print_r($_SESSION);
        if(isset($_SESSION) && !empty($_SESSION['partnerID']))
        {
            $isSale = 0;
            $isService = 0;
            $sale = array();
            $service = array();
            $result['empDetails'] = $this->common_model->getRows('tbl_partners',array('empCode' => $_SESSION['partnerID'],'status' => 1));
            $result['sales'] = $this->common_model->getRows('tbl_partners',array('empCode' => $_SESSION['partnerID'],'status' => 1),'salesExpertName,salesExpertType,salesExpertAddress,contactPerson,designation,contactMobilePerson');
            
            $result['service'] = $this->common_model->getRows('tbl_partners',array('empCode' => $_SESSION['partnerID'],'status' => 1),'serviceBusinessPartnerName,serviceBusinessPartnerAddress,serviceBusinessPartnerMobileNumber');
            
            foreach ($result['sales'] as $key => $value) {
                if($value['salesExpertType'] !='' && $value['salesExpertAddress'] !='' && $value['contactPerson'] !='' && $value['designation'] !='' && $value['contactMobilePerson'] !='' && $value['salesExpertName'] !='')
                {
                    $isSale = 0;
                }else{
                    $isSale = 1;
                }
                
                $sale[] = $isSale;
            }
            foreach ($result['service'] as $key => $value) {
                if($value['serviceBusinessPartnerName'] !='' && $value['serviceBusinessPartnerAddress'] !='' && $value['serviceBusinessPartnerMobileNumber'] !='')
                {
                    $isService = 0;
                }else{
                    $isService = 1;
                }
                //echo $isService;
                $service[] = $isService;
            }
            $result['isSale'] = $sale;
            $result['isService'] = $service;
            
                $this->load->view('header');
                $this->load->view('emp-details',$result);
                $this->load->view('footer');
            
        }else{
            redirect(base_url());
        }
    }

    public function policy()
    {
        $this->load->view('policy');
    }

    public function dos_donts()
    {
        $this->load->view('dos_donts');
    }

    public function getStateCityByPincode()
    {
        $result = $this->common_model->getRow('pincode_master',array('pincode' => $_POST['pincode']));
        if($result)
        {
            $data['status'] = 'success';
            $data['content'] = $result;
        }else{
            $data['status'] = 'error';
            $data['content'] = '';
        }
        echo json_encode($data);exit();
    }
    public function questionnaire()
    {
        $this->load->view('header');
        $this->load->view('questionnaire');
        $this->load->view('footer');
    }

    public function water_purifier_product_questionnaire()
    {
        is_emp_customer_logged_in();
        $this->load->view('header');
        $this->load->view('water_purifier_product_questionnaire');
        $this->load->view('footer');       
    }
    public function vacuum_cleaner_product_questionnaire()
    {
        is_emp_customer_logged_in();
        $this->load->view('header');
        $this->load->view('vacuum_cleaner_product_questionnaire');
        $this->load->view('footer');       
    }

    public function service_request_questionnaire()
    {
        $this->load->view('header');
        $this->load->view('service_request_questionnaire');
        $this->load->view('footer');       
    }

    public function installation_request_questionnaire()
    {
        is_emp_customer_logged_in();
        $this->load->view('header');
        $this->load->view('installation_request_questionnaire');
        $this->load->view('footer');   
    }

    public function custwaterAnswer()
    {
        
        if(isset($_POST))
        {
            $cnt = 1;
            $re = '/_[0-9].+/s';
            
            $ans = json_decode($_POST['finalAnswers']);
            foreach($_POST['questions'] as $k => $val)
            {
                
                if($cnt >=3 && $cnt <=5)
                {
                    
                    
                    if($_POST['selected_question_'.$cnt] !='')
                    {
                        $finalAns = json_decode($_POST['selected_question_'.$cnt]);
                        
                        $cnt1 = 1;
                        foreach ($finalAns as $key => $value) {
                            $insData['questionTxt'] = $_POST['ques_'.$cnt].' ('.$cnt1.' Reason)';
                            $insData['selectedOption'] = $value;
                            $insData['custID'] = $_SESSION['empInfo']['custId'];
                            $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                            $insData['questionCategory'] = 1;
                            $insData['dateAdded'] = date('Y-m-d H:i:s');
                            $cnt1++;
                            /*echo 'MultiSelect==>'.$_POST['selected_question_'.$cnt];
                            echo '<pre>';print_r($insData);*/
                            $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                        }
                        //$anser = '{1.'.$finalAns[0].', 2.'.$finalAns[1].', 3.'.$finalAns[2].'}';    
                    }else{
                        
                        /*$anser ='';
                        $insData['questionTxt'] = $_POST['ques_'.$cnt];
                        $insData['selectedOption'] = $anser;
                        $insData['custID'] = $_SESSION['empInfo']['custId'];
                        $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                        $insData['questionCategory'] = 1;
                        $insData['dateAdded'] = date('Y-m-d H:i:s');
                        $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);*/
                    }
                    

                    
                }else if($cnt > 5 && $cnt <=7)
                {
                    
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];
                    $insData['selectedOption'] = trim($_POST['openbox-'.$cnt]);
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 1;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                }
                else{
                    
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];//trim($val);//$k;//preg_replace($re, '', $k);
                    $insData['selectedOption'] = trim($_POST['answers'][$k]);
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 1;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                    
                }
                
                ;
                //$result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                
                $cnt++;
            }
            
            echo json_encode(array('status' => 'success'));exit();
        }
    }

    public function custvaccumAnswer()
    {
        //echo '<pre>';print_r($_POST);die('sdf');
        if(isset($_POST))
        {
            $cnt = 1;
            $re = '/_[0-9].+/s';
            
            $ans = json_decode($_POST['finalAnswers']);
            foreach($_POST['questions'] as $k => $val)
            {
                
                if($cnt ==1 || $cnt==5 || $cnt==2)
                {
                    
                    
                    if($_POST['selected_question_'.$cnt] !='')
                    {
                        $cnt1 = 1;
                        $finalAns = json_decode($_POST['selected_question_'.$cnt]);
                        foreach ($finalAns as $key => $value) {
                            $insData['questionTxt'] = $_POST['ques_'.$cnt].' ('.$cnt1.' Reason)';
                            $insData['selectedOption'] = $value;
                            $insData['custID'] = $_SESSION['empInfo']['custId'];
                            $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                            $insData['questionCategory'] = 2;
                            $insData['dateAdded'] = date('Y-m-d H:i:s');
                            if (isset($_POST['openboxspecify-'.$cnt]) && !empty($_POST['openboxspecify-'.$cnt]) !='' && $cnt==5 && $value=='Others (Please specify)')
                            {
                                $insData['isSpecify'] = 1;
                                $insData['textAnswer'] = $_POST['openboxspecify-'.$cnt];
                            }else{
                                $insData['isSpecify'] = 0;
                                $insData['textAnswer'] = '';
                            }
                            $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                            $cnt1++;
                        }
                       
                    }else{
                        /*$anser ='';
                        $insData['questionTxt'] = $_POST['ques_'.$cnt];
                        $insData['selectedOption'] = $anser;
                        $insData['custID'] = $_SESSION['empInfo']['custId'];
                        $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                        $insData['questionCategory'] = 2;
                        $insData['dateAdded'] = date('Y-m-d H:i:s');
                        $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);*/
                    }
                    
                    
                    
                }else if(($cnt > 5 && $cnt <=7) || $cnt==4)
                {
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];
                    $insData['selectedOption'] = trim($_POST['openbox-'.$cnt]);
                    $insData['isSpecify'] = 0;
                    $insData['textAnswer'] = '';
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 2;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                }
                else{
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];//trim($val);//$k;//preg_replace($re, '', $k);
                    $insData['selectedOption'] = trim($_POST['answers'][$k]);
                    $insData['isSpecify'] = 0;
                    $insData['textAnswer'] = '';
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 2;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);

                }
                //echo '<pre>';print_r($insData);
                //$result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                
                $cnt++;
            }
            
            echo json_encode(array('status' => 'success'));exit();
        }
    }

    public function custserviceAnswer()
    {
       //echo '<pre>';print_r($_POST);die('asd');
        if(isset($_POST))
        {
            $cnt = 1;
            $re = '/_[0-9].+/s';
            
            $ans = json_decode($_POST['finalAnswers']);
            foreach($_POST['questions'] as $k => $val)
            {
                
                if($cnt ==4 || $cnt==5)
                {
                    
                    
                    if($_POST['selected_question_'.$cnt] !='')
                    {
                        $finalAns = json_decode($_POST['selected_question_'.$cnt]);
                        $cnt1 = 1;
                        foreach ($finalAns as $key => $value) {
                            $insData['questionTxt'] = $_POST['ques_'.$cnt].' ('.$cnt1.' Reason)';
                            $insData['selectedOption'] = $value;
                            $insData['custID'] = $_SESSION['empInfo']['custId'];
                            $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                            $insData['questionCategory'] = 3;
                            $insData['dateAdded'] = date('Y-m-d H:i:s');
                            if (isset($_POST['openboxspecify-'.$cnt]) && !empty($_POST['openboxspecify-'.$cnt]) !='' && $cnt==5 && $value=='Any other (please specify)')
                            {
                                $insData['isSpecify'] = 1;
                                $insData['textAnswer'] = $_POST['openboxspecify-'.$cnt];
                            }else{
                                $insData['isSpecify'] = 0;
                                $insData['textAnswer'] = '';
                            }
                            $cnt1++;
                            $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                        }
                        
                    }else{
                        /*$anser ='';
                        $insData['questionTxt'] = $_POST['ques_'.$cnt];
                        $insData['selectedOption'] = $anser;
                        $insData['custID'] = $_SESSION['empInfo']['custId'];
                        $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                        $insData['questionCategory'] = 3;
                        $insData['dateAdded'] = date('Y-m-d H:i:s');
                        $insData['isSpecify'] = 0;
                        $insData['textAnswer'] = '';
                        $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);*/
                    }
                    
                    
                    
                }else if($cnt==9)
                {
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];
                    $insData['selectedOption'] = trim($_POST['openbox-'.$cnt]);
                    $insData['isSpecify'] = 0;
                    $insData['textAnswer'] = '';
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 3;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                }
                else{
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];//trim($val);//$k;//preg_replace($re, '', $k);
                    $insData['selectedOption'] = trim($_POST['answers'][$k]);
                    if($cnt==6)
                    {
                        $insData['isSpecify'] = 1;
                        $insData['textAnswer'] = $_POST['openboxspecify-'.$cnt];
                    }else{
                        $insData['isSpecify'] = 0;
                        $insData['textAnswer'] = '';    
                    }
                    
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 3;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                }
                
                
                
                $cnt++;
            }
            
            echo json_encode(array('status' => 'success'));exit();
        }
    }

    public function custinstallAnswer()
    {
        
        if(isset($_POST))
        {
            $cnt = 1;
            $re = '/_[0-9].+/s';
            
            $ans = json_decode($_POST['finalAnswers']);
            foreach($_POST['questions'] as $k => $val)
            {
                
                if($cnt ==4 || $cnt==3)
                {
                    
                    
                    if($_POST['selected_question_'.$cnt] !='')
                    {
                        $finalAns = json_decode($_POST['selected_question_'.$cnt]);
                        $cnt1 = 1;
                        foreach ($finalAns as $key => $value) {
                            $insData['questionTxt'] = $_POST['ques_'.$cnt].' ('.$cnt1.' Reason)';
                            $insData['selectedOption'] = $value;
                            $insData['custID'] = $_SESSION['empInfo']['custId'];
                            $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                            $insData['questionCategory'] = 4;
                            $insData['dateAdded'] = date('Y-m-d H:i:s');
                            $cnt1++;
                            
                            $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                        }
                       
                    }else{
                        /*$anser = '';
                        $insData['questionTxt'] = $_POST['ques_'.$cnt];
                        $insData['selectedOption'] = $anser;
                        $insData['custID'] = $_SESSION['empInfo']['custId'];
                        $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                        $insData['questionCategory'] = 4;
                        $insData['dateAdded'] = date('Y-m-d H:i:s');
                        
                        $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);*/
                    }
                    
                    
                    
                }else if($cnt==8)
                {
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];
                    $insData['selectedOption'] = trim($_POST['openbox-'.$cnt]);
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 4;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');
                    
                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                }
                else{
                    $insData['questionTxt'] = $_POST['ques_'.$cnt];//trim($val);//$k;//preg_replace($re, '', $k);
                    $insData['selectedOption'] = trim($_POST['answers'][$k]);
                    $insData['custID'] = $_SESSION['empInfo']['custId'];
                    $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                    $insData['questionCategory'] = 4;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');

                    $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
                }
                
                
                
                $cnt++;
            }
            
            echo json_encode(array('status' => 'success'));exit();
        }
    }
}