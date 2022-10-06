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
            $this->form_validation->set_rules('empVertical','Employee Vertical','trim|required');
            $this->form_validation->set_rules('empDesignation','Employee Designation','trim|required');
            $this->form_validation->set_rules('empPhone','Employee Phone','trim|required');
            $this->form_validation->set_rules('captcha','captcha','trim|required');
            if($this->form_validation->run()==FALSE)
            {
                $data = array(
                    'errors' => validation_errors()
                );
                echo json_encode(array('status' => 'error','error' => 'Please enter all details.'));
            }else{
                //echo '<pre>';print_r($_POST);die('sdf');
                if($_POST['cpatchaVal']!=md5($_POST['captcha']))
                {
                    echo json_encode(array('status' => 'error','error'=>'Invalid Captcha Value.'));
                }else{

                    
                    // check duplication record
                    $response = $this->common_model->getRow('tbl_employee',array('empCode' => $this->input->post('empCode'), 'status' => 1));
                    if(isset($response) && !empty($response))
                    {
                        $checkCustomer = $this->db->get_where('tbl_customer',array('addedBy' => $response['empId']))->result_array();
                        
                        if(count($checkCustomer) < 15)
                        {
                            $admin_user = array('emp_id' => $response['empId'],
                                'empname' => $response['empName']
                            
                            );
                            $this->session->set_userdata('empName',$response['empName']);
                            $this->session->set_userdata('empInfo',$admin_user);
                            $this->session->set_userdata('empId',$response['empId']);
                            echo json_encode(array('status' => 'success'));
                        }else{
                            
                            echo json_encode(array('status' => 'limiterror'));
                        }
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
                }
                

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
            $this->form_validation->set_rules('custEmail','Customer Email','trim|required');
            $this->form_validation->set_rules('custLocation','Customer Location','trim|required');
            $this->form_validation->set_rules('custAge','Customer Age','trim|required');
            $this->form_validation->set_rules('custMobile','Customer Phone','trim|required');
            $this->form_validation->set_rules('custSex','Customer Sex','trim|required');
            $this->form_validation->set_rules('custNomember','Customer No Of Member In Family','trim|required');
            $this->form_validation->set_rules('custEFL','Customer EFL Product Owned','trim|required');
            if($this->form_validation->run()==FALSE)
            {
                $data = array(
                    'errors' => validation_errors()
                );
                echo json_encode(array('status' => 'error','error' => 'Please enter all details.'));
            }else{
                $insData['custName'] = $this->input->post('custName');
                $insData['custEmail'] = $this->input->post('custEmail');
                $insData['custPhoneNumber'] = $this->input->post('custMobile');
                $insData['custLocation'] = $this->input->post('custLocation');
                $insData['custAge'] = $this->input->post('custAge');
                $insData['custSex'] = $this->input->post('custSex');
                $insData['custNoOfMemeberInFamily'] = $this->input->post('custNomember');
                $insData['custEFL'] = $this->input->post('custEFL');
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
            }
        }else{
            redirect(base_url('customer-details'));
        }
    }

    public function quiz()
    {
        //echo '<pre>';print_r($_SESSION);
        is_emp_customer_logged_in();
        $data['questions'] = json_decode(getQuestion());
        $this->load->view('header');
        $this->load->view('quiz',$data);
        $this->load->view('footer');
    }

    public function custquestionAnswer()
    {
        
        if(isset($_POST))
        {
            
            foreach($_POST['finalAnswers'] as $k => $val)
            {
                $insData['custID'] = $_SESSION['empInfo']['custId'];
                $insData['questionTxt'] = $k;
                $insData['selectedOption'] = trim($val);
                $insData['empID'] = $_SESSION['empInfo']['emp_id'];
                $insData['dateAdded'] = date('Y-m-d H:i:s');
                $result = $this->common_model->insertRecord('tbl_customer_answers',$insData);
            }
            echo json_encode(array('status' => 'success'));exit();
        }
    }

    public function logout()
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

    public function searchPartnersByID()
    {
        //echo'<pre>';print_r($_POST);
        $this->load->view('header');
        $this->load->view('emp-details');
        $this->load->view('footer');
    }
}