<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/PhpSpreadsheet/vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Entertheadmin extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('entertheadmin/login');

    }

    public function login()
    {
        if(isset($_POST) && !empty($_POST))
        {
            $this->form_validation->set_rules('username','User Name','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            if($this->form_validation->run()==FALSE)
            {
                $data = array(
                    'errors' => validation_errors()
                );
                /*$this->session->set_flashdata('errors', $data['errors']);
                redirect(base_url('entertheadmin'),'refresh');*/
                echo json_encode(array('status' => 'error','error' => 'Please enter all details.'));
            }else{
                
                $result = $this->common_model->getRow('tbl_login',array('username' => $this->input->post('username'), 'password' => $this->input->post('password')));
                
                if(isset($result) && !empty($result))
                {
                    $admin_user = array('user_id' => $result['login_id'],
                        'username' => $result['username'],
                        'is_logged_in' => true,
                        'group_id' => 1
                    );

                    $this->session->set_userdata('admin_user', $admin_user);
                    $this->session->set_userdata('name', $result['name']);
                    $this->session->set_userdata('mobile', $result['mobile']);
                    $this->session->set_userdata('username', $result['username']);
                    $this->session->set_userdata('user_id', $result['login_id']);
                    $this->session->set_userdata('role', $result['role']);
                    $this->session->set_userdata('is_verified', 0);
                    $this->session->set_userdata('group_id', 1);
                    echo json_encode(array('status' => 'success'));
                }else{
                    echo json_encode(array('status' => 'error','error' => 'Invalid details'));
                }
            }
        }else{

        }
    }

    public function dashboard()
    {
        $data['waterpurifier'] = $this->common_model->getRecordCount(1);
        $data['vacuumcleaner'] = $this->common_model->getRecordCount(2);
        $data['service'] = $this->common_model->getRecordCount(3);
        $data['installation'] = $this->common_model->getRecordCount(4);
        
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'entertheadmin/dashboard';
        $this->load->view('entertheadmin/Include/template', $data);
    }

    public function employees()
    {
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'entertheadmin/employee';
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'empId';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'empId';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';
        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= " `status` = 1 AND `dateAdded` between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= " `status` = 1";
        }
        // echo "<br/>Paging seg: ".$paging_seg;
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        if (!empty($where_search)) {
            $this->db->where($where_search);
        }
        $all_records_count = $this->db->count_all_results('tbl_employee');
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/employees/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        $this->db->order_by($data['sort_by'], $data['sort_order']);
        if (!empty($where_search)) {
            $this->db->where($where_search);
        }
        $this->db->limit($config["per_page"], $page);
        $query = $this->db->get('tbl_employee');
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        $this->load->view('entertheadmin/Include/template', $data);
    }

    public function customers()
    {
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'entertheadmin/customer';
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'custID';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'custID';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';
        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= " `status` = 1 AND `dateAdded` between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= " `status` = 1";
        }
        // echo "<br/>Paging seg: ".$paging_seg;
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        if (!empty($where_search)) {
            $this->db->where($where_search);
        }
        $all_records_count = $this->db->count_all_results('tbl_customer');
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/customers/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        $this->db->order_by($data['sort_by'], $data['sort_order']);
        if (!empty($where_search)) {
            $this->db->where($where_search);
        }
        $this->db->limit($config["per_page"], $page);
        $query = $this->db->get('tbl_customer');
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        $this->load->view('entertheadmin/Include/template', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_user');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('group_id');
        session_destroy();
        redirect(ADMIN_FOLDER_NAME . '/');
    }

    public function downloadExcel()
    {
        if(isset($_GET) && $_GET['searchType']=='emp')
        {
            $where = 'status = 1';
            if((isset($_GET['date_to']) && !empty($_GET['date_to'])) && (isset($_GET['date_from']) && !empty($_GET['date_from'])))
            {
                $fromDate = date('Y-m-d',strtotime($_GET['date_from']));
                $toDate = date('Y-m-d',strtotime($_GET['date_to']));
                $where.=' AND dateAdded BETWEEN ('.$fromDate.' AND '.$toDate.')';
            }
            $response = $this->db->get_where('tbl_employee',$where)->result_array();
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            
            $fileName = 'employee_details_'.date('Y-m-d').'.xlsx'; 
            // set Header
            $sheet->SetCellValue('A1', 'Employee Name');
            $sheet->SetCellValue('B1', 'Employee Code');
            $sheet->SetCellValue('C1', 'Employee Vertical');
            $sheet->SetCellValue('D1', 'Employee Designation');
            $sheet->SetCellValue('E1', 'Employee Phone Number');
            $sheet->SetCellValue('F1', 'Create Date'); 

            $rowCount = 2;
            foreach ($response as $element) {
                $sheet->SetCellValue('A' . $rowCount, $element['empName']);
                $sheet->SetCellValue('B' . $rowCount, $element['empCode']);
                $sheet->SetCellValue('C' . $rowCount, $element['empVertical']);
                $sheet->SetCellValue('D' . $rowCount, $element['empDesignation']);
                $sheet->SetCellValue('E' . $rowCount, $element['empPhoneNumber']);
                $sheet->SetCellValue('F' . $rowCount, $element['dateAdded']);
                

                $rowCount++;
            }

            $writer = new Xlsx($spreadsheet);
            $writer->save('uploads/'.$fileName);
            header("Content-Type: application/vnd.ms-excel");
            redirect("uploads/".$fileName); 

        }

        if(isset($_GET) && $_GET['searchType']=='customer')
        {
            $where = 'status = 1';
            if((isset($_GET['date_to']) && !empty($_GET['date_to'])) && (isset($_GET['date_from']) && !empty($_GET['date_from'])))
            {
                $fromDate = date('Y-m-d',strtotime($_GET['date_from']));
                $toDate = date('Y-m-d',strtotime($_GET['date_to']));
                $where.=' AND dateAdded BETWEEN ('.$fromDate.' AND '.$toDate.')';
            }
            $response = $this->db->get_where('tbl_customer',$where)->result_array();
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            
            $fileName = 'customer_details_'.date('Y-m-d').'.xlsx'; 
            // set Header
            $sheet->SetCellValue('A1', 'Customer Name');
            $sheet->SetCellValue('B1', 'Customer Email');
            $sheet->SetCellValue('C1', 'Customer Phone Number');
            $sheet->SetCellValue('D1', 'Customer Pincode');
            $sheet->SetCellValue('E1', 'Customer State');
            $sheet->SetCellValue('F1', 'Customer City');
            $sheet->SetCellValue('G1', 'Customer Code');
            $sheet->SetCellValue('H1', 'Customer Gender');
            $sheet->SetCellValue('I1', 'Customer No Of Member In Family');
            $sheet->SetCellValue('J1', 'EFL Product');
            $sheet->SetCellValue('K1', 'Visit Type');
            $sheet->SetCellValue('L1', 'Create Date'); 

            $rowCount = 2;
            foreach ($response as $element) {
                $sheet->SetCellValue('A' . $rowCount, $element['custName']);
                $sheet->SetCellValue('B' . $rowCount, $element['custEmail']);
                $sheet->SetCellValue('C' . $rowCount, $element['custPhoneNumber']);
                $sheet->SetCellValue('D' . $rowCount, $element['custPincode']);
                $sheet->SetCellValue('E' . $rowCount, $element['custState']);
                $sheet->SetCellValue('F' . $rowCount, $element['custCity']);
                $sheet->SetCellValue('G' . $rowCount, $element['custCity']);
                $sheet->SetCellValue('H' . $rowCount, $element['custSex']);
                $sheet->SetCellValue('I' . $rowCount, $element['custNoOfMemeberInFamily']);
                $sheet->SetCellValue('J' . $rowCount, $element['custEFL']);
                $sheet->SetCellValue('K' . $rowCount, $element['custVisitType']);
                $sheet->SetCellValue('L' . $rowCount, $element['dateAdded']);
                

                $rowCount++;
            }

            $writer = new Xlsx($spreadsheet);
            $writer->save('uploads/'.$fileName);
            header("Content-Type: application/vnd.ms-excel");
            redirect("uploads/".$fileName); 

        }
    }

    public function downloadCustomerExcel()
    {
        $where = '';
        if((isset($_GET['date_to']) && !empty($_GET['date_to'])) && (isset($_GET['date_from']) && !empty($_GET['date_from'])))
        {
            $fromDate = date('Y-m-d',strtotime($_GET['date_from']));
            $toDate = date('Y-m-d',strtotime($_GET['date_to']));
            $where.='C.status = 1 AND E.status = 1 AND E.dateAdded BETWEEN ('.$fromDate.' AND '.$toDate.')';
        }else{
            $where.= "C.status = 1 AND E.status = 1";
        }
        $sql = "SELECT * FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where;
        $result = $this->db->query($sql)->result_array();
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
            
        $fileName = 'customer_data_'.date('Y-m-d').'.xlsx'; 
        // set Header
        $sheet->SetCellValue('A1', 'Employee Name');
        $sheet->SetCellValue('B1', 'Employee Code');
        $sheet->SetCellValue('C1', 'Employee Phone Number');
        $sheet->SetCellValue('D1', 'Customer Name');
        $sheet->SetCellValue('E1', 'Customer Phone');
        $sheet->SetCellValue('F1', 'Customer Location');
        $sheet->SetCellValue('G1', 'Customer Age');
        $sheet->SetCellValue('H1', 'Customer Gender');
        $sheet->setCellValue('I1','Customer No Of Family Member');
        $questions = json_decode(getQuestion());
        $letter = 'J';
        foreach ($questions as $key => $value) {
            $sheet->setCellValue($letter.'1',$key);
            $letter++;
        }
        
        $rowCount = 2;
        foreach ($result as $element) {
            $sheet->SetCellValue('A' . $rowCount, $element['empName']);
            $sheet->SetCellValue('B' . $rowCount, $element['empCode']);
            $sheet->SetCellValue('C' . $rowCount, $element['empPhoneNumber']);
            $sheet->SetCellValue('D' . $rowCount, $element['custName']);
            $sheet->SetCellValue('E' . $rowCount, $element['custPhoneNumber']);
            $sheet->SetCellValue('F' . $rowCount, $element['custLocation']);
            $sheet->SetCellValue('G' . $rowCount, $element['custAge']);
            $sheet->SetCellValue('H' . $rowCount, $element['custSex']);
            $sheet->SetCellValue('I' . $rowCount, $element['custNoOfMemeberInFamily']);
            
            $response = $this->db->get_where('tbl_customer_answers',array('custID' => $element['custID'],'empID'=>$element['empId']))->result_array();
            
            $letter = 'J';
            foreach ($response as $key => $value) {
                $sheet->setCellValue($letter.$rowCount,$value['selectedOption']);
                $letter++;
            }
            
            $rowCount++;
        }
        $writer = new Xlsx($spreadsheet);
            $writer->save('uploads/'.$fileName);
            header("Content-Type: application/vnd.ms-excel");
            redirect("uploads/".$fileName);
    }

    public function importpartners()
    {
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'entertheadmin/partners';
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'partnersID';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'partnersID';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';
        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= " `status` = 1 AND `dateAdded` between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= " `status` = 1";
        }
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        if (!empty($where_search)) {
            $this->db->where($where_search);
        }
        $all_records_count = $this->db->count_all_results('tbl_partners');
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/importpartners/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        $this->db->order_by($data['sort_by'], $data['sort_order']);
        if (!empty($where_search)) {
            $this->db->where($where_search);
        }
        $this->db->limit($config["per_page"], $page);
        $query = $this->db->get('tbl_partners');
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        $this->load->view('entertheadmin/Include/template', $data);
    }

    public function importExcel()
    {
        if(isset($_POST) && !empty($_POST))
        {
            $this->load->library('upload');
            $this->load->helper('string');

            $config['upload_path'] = './uploads/partnersExcel/';
            $config['max_execution_time'] = 600;
            $config['allowed_types'] = '*';
            // $config['allowed_types'] = 'xlsx';
            $config['max_size'] = '200240';
            $config['encrypt_name'] = TRUE;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('fileUpload')) {
                echo json_encode(array('error' => true, 'htmlcontents' => $this->upload->display_errors()));
                exit;
            }
            $data_upload = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data();
            $customer_file = $upload_data['file_name'];

            $file_name = $config['upload_path'] . $customer_file;
            $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
            $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $objPHPExcel = $reader->load($file_name);
            $worksheet = $objPHPExcel->setActiveSheetIndex(0);
            $column = 'B';
            $lastRow = $worksheet->getHighestRow();
            $counter_fos = 0;

            for ($row = 2; $row <= $lastRow; $row++) {
                $insData['empCode'] = $worksheet->getCell('B' . $row)->getValue();
                $insData['empName'] = $worksheet->getCell('C' . $row)->getValue();
                if(!empty($insData['empCode']) && !empty($insData['empName']))
                {
                    $insData['serviceBusinessPartnerName'] = $worksheet->getCell('D' . $row)->getValue();
                    $insData['serviceBusinessPartnerAddress'] = $worksheet->getCell('E' . $row)->getValue();
                    $insData['serviceBusinessPartnerMobileNumber'] = $worksheet->getCell('F' . $row)->getValue();
                    $insData['salesExpertName'] = $worksheet->getCell('G' . $row)->getValue();
                    $insData['salesExpertType'] = $worksheet->getCell('H' . $row)->getValue();
                    $insData['salesExpertAddress'] = $worksheet->getCell('I' . $row)->getValue();
                    $insData['contactPerson'] = $worksheet->getCell('J' . $row)->getValue();
                    $insData['designation'] = $worksheet->getCell('K' . $row)->getValue();
                    $insData['contactMobilePerson'] = $worksheet->getCell('L' . $row)->getValue();
                    $insData['status'] = 1;
                    $insData['dateAdded'] = date('Y-m-d H:i:s');

                    $this->common_model->insertRecord('tbl_partners',$insData);
                }

            }

            redirect('entertheadmin/importpartners');
        }

        $data['title'] = 'Dashboard';
        $data['main_content'] = 'entertheadmin/importpartners';
        $this->load->view('entertheadmin/Include/template', $data);
    }

    public function waterpurifier_()
    {
        //$data['questions'] = getWaterPurifierQuestion();
        
        $data['title'] = 'Water Purifier';
        $data['main_content'] = 'entertheadmin/waterpurifier';
        //$data['column_list'] = $this->admin_column_list;
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'empId';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'empId';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';

        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= "C.status = 1 AND E.status = 1 AND E.dateAdded between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= "C.status = 1 AND E.status = 1";
        }
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        
        $sql = "SELECT C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where_search;

        $all_records_count = $this->db->query($sql)->num_rows();
        
        $data['questions'] = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = 1')->result_array();
        
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/waterpurifier/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        
        $sql = "SELECT C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId WHERE ".$where_search." ORDER BY E.empId desc ";
        $query = $this->db->query($sql);
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        //echo '<pre>';print_r($data);
        $this->load->view('entertheadmin/Include/template', $data);
    }
    public function waterpurifier()
    {
        //$data['questions'] = getWaterPurifierQuestion();
        
        $data['title'] = 'Water Purifier';
        $data['main_content'] = 'entertheadmin/waterpurifier';
        //$data['column_list'] = $this->admin_column_list;
        /*$data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'empId';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'empId';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';*/

        $where_search = '';

        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= "C.status = 1 AND E.status = 1 AND E.dateAdded between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            /*if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }*/
        }else{
            $where_search.= "C.status = 1 AND E.status = 1";
        }
       /* $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        
        $sql = "SELECT C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where_search;

        $all_records_count = $this->db->query($sql)->num_rows();
        
        $data['questions'] = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = 1')->result_array();
        
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/waterpurifier/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;
*/
        $data['questions'] = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = 1')->result_array();
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,C.custCode,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId WHERE ".$where_search." ORDER BY E.empId desc ";
        $query = $this->db->query($sql);
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        /*$data["links"] = $this->pagination->create_links();*/
        //echo '<pre>';print_r($data);
        $this->load->view('entertheadmin/Include/template', $data);
    }
    public function vacuumcleaner()
    {
        //$data['questions'] = getVaccumQuestion();
        
        $data['title'] = 'Water Purifier';
        $data['main_content'] = 'entertheadmin/vacuumcleaner';
        //$data['column_list'] = $this->admin_column_list;
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'empId';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'empId';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';

        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= "C.status = 1 AND E.status = 1 AND E.dateAdded between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= "C.status = 1 AND E.status = 1";
        }
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where_search;

        $all_records_count = $this->db->query($sql)->num_rows();
        
        $data['questions'] = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = 2')->result_array();
        
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/vacuumcleaner/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId WHERE ".$where_search." ORDER BY E.empId desc ";
        $query = $this->db->query($sql);
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        $this->load->view('entertheadmin/Include/template', $data);
    }
    public function servicerequest()
    {
        //$data['questions'] = getServiceQuestion();
        
        $data['title'] = 'Water Purifier';
        $data['main_content'] = 'entertheadmin/servicerequest';
        //$data['column_list'] = $this->admin_column_list;
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'empId';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'empId';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';

        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= "C.status = 1 AND E.status = 1 AND E.dateAdded between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= "C.status = 1 AND E.status = 1";
        }
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where_search;

        $all_records_count = $this->db->query($sql)->num_rows();
        
        $data['questions'] = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = 3')->result_array();
        
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/servicerequest/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId WHERE ".$where_search." ORDER BY E.empId desc ";
        $query = $this->db->query($sql);
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        $this->load->view('entertheadmin/Include/template', $data);
    }
    public function installationrequest()
    {
        //$data['questions'] = getInstallQuestion();
        
        $data['title'] = 'Water Purifier';
        $data['main_content'] = 'entertheadmin/installationrequest';
        //$data['column_list'] = $this->admin_column_list;
        $data['sort_by'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'empId';
        $data['sort_order'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'desc';
        $data['fields'] = '';
        $data['pmk'] = 'empId';
        $paging_seg = 5;
        $segs = $this->uri->segment_array();
        $search_term = $this->input->post('search_term');
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        if (empty($search_term) && isset($segs[5]) && $segs[5] == 'search') {
            $search_term = isset($segs[6]) ? $segs[6] : '';
            $date_from = isset($segs[7]) ? $segs[7] : '';
            $date_to = isset($segs[8]) ? $segs[8] : '';
        }
        $search_term = (empty($search_term)) ? 'empty' : $search_term;
        $search_term_wbspace = str_replace(" ", "___", $search_term); // 3 underscore

        $date_from = (empty($date_from)) ? 'empty' : $date_from;
        $date_from_wbspace = str_replace(" ", "___", $date_from); // 3 underscore

        $date_to = (empty($date_to)) ? 'empty' : $date_to;
        $date_to_wbspace = str_replace(" ", "___", $date_to); // 3 underscore

        $append_link = '';

        $where_search = '';

        if (!empty($date_from) && $date_from != 'empty') {
            $date_from = str_replace("___", " ", $date_from);
            $date_to = (!empty($date_to) && $date_to != 'empty') ? str_replace("___", " ", $date_to) : date('Y-m-d 23:59:59');

            $where_search .= "C.status = 1 AND E.status = 1 AND E.dateAdded between '" . date('Y-m-d 00:00:00', strtotime($date_from)) . "' and '" . date('Y-m-d 23:59:59', strtotime($date_to)) . "'";


            if (!empty($append_link)) {
                $append_link .= $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 2;
            } else {
                $append_link = '/search/empty/' . $date_from_wbspace . '/' . $date_to_wbspace . '/';
                $paging_seg += 4;
            }
        }else{
            $where_search.= "C.status = 1 AND E.status = 1";
        }
        $data['date_from'] = (!empty($date_from) && $date_from != 'empty') ? $date_from : '';
        $data['date_to'] = (!empty($date_to) && $date_to != 'empty') ? $date_to : '';
        
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where_search;

        $all_records_count = $this->db->query($sql)->num_rows();
        $data['questions'] = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = 4')->result_array();
        
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/installationrequest/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId WHERE ".$where_search." ORDER BY E.empId desc ";
        $query = $this->db->query($sql);
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
        $this->load->view('entertheadmin/Include/template', $data);
    }

    public function downloadCategoryExcel()
    {
        
        $where = '';
        if((isset($_GET['date_to']) && !empty($_GET['date_to'])) && (isset($_GET['date_from']) && !empty($_GET['date_from'])))
        {
            $fromDate = date('Y-m-d',strtotime($_GET['date_from']));
            $toDate = date('Y-m-d',strtotime($_GET['date_to']));
            $where.='C.status = 1 AND E.status = 1 AND E.dateAdded BETWEEN ('.$fromDate.' AND '.$toDate.')';
        }else{
            $where.= "C.status = 1 AND E.status = 1";
        }
        $sql = "SELECT C.custID,C.custName,C.custEmail,C.custPhoneNumber,C.custPincode,C.custState,C.custCity,C.custCode,E.empName,E.empCode,E.empVertical,E.empDesignation,E.empPhoneNumber,E.empId FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where;
        $result = $this->db->query($sql)->result_array();
        
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
            
        if($_GET['category']==1)
        {
            $fileName = 'Water_Purifier_Customer_Survey_Data_'.date('Y-m-d').'.xlsx'; 
        }else if($_GET['category']==2){
            $fileName = 'Vacuum Cleaner_Customer_Survey_Data_'.date('Y-m-d').'.xlsx'; 
        }else if($_GET['category']==3){
            $fileName = 'Service Request_Customer_Survey_Data_'.date('Y-m-d').'.xlsx'; 
        }else{
            $fileName = 'Installation Request_Customer_Survey_Data_'.date('Y-m-d').'.xlsx';     
        }
        
        // set Header
        $sheet->SetCellValue('A1', 'Employee Name');
        $sheet->SetCellValue('B1', 'Employee Code');
        $sheet->SetCellValue('C1', 'Employee Phone Number');
        $sheet->SetCellValue('D1', 'Employee Vertical');
        $sheet->SetCellValue('E1', 'Customer Name');
        $sheet->SetCellValue('F1', 'Customer Email');
        $sheet->SetCellValue('G1', 'Customer Phone');
        $sheet->SetCellValue('H1', 'Customer Pincode');
        $sheet->SetCellValue('I1', 'Customer State');
        $sheet->setCellValue('J1','Customer City');
        $sheet->setCellValue('K1','Customer Code');
        $questions = $this->db->query('SELECT DISTINCT(`questionTxt`) FROM `tbl_customer_answers` WHERE `questionCategory` = '.$_GET['category'])->result_array();
        $letter = 'L';
        foreach ($questions as $key => $value) {
            $sheet->setCellValue($letter.'1',$value['questionTxt']);
            $letter++;
        }
        
        $rowCount = 2;
        foreach ($result as $element) {
            $result1 = $this->db->get_where('tbl_customer_answers',array('custID' => $element['custID'],'empID'=>$element['empId'],'questionCategory' => $_GET['category']))->result_array();
            if(!empty($result1)){
                $sheet->SetCellValue('A' . $rowCount, $element['empName']);
                $sheet->SetCellValue('B' . $rowCount, $element['empCode']);
                $sheet->SetCellValue('C' . $rowCount, $element['empPhoneNumber']);
                $sheet->SetCellValue('D' . $rowCount, $element['empVertical']);
                $sheet->SetCellValue('E' . $rowCount, $element['custName']);
                $sheet->SetCellValue('F' . $rowCount, $element['custEmail']);
                $sheet->SetCellValue('G' . $rowCount, $element['custPhoneNumber']);
                $sheet->SetCellValue('H' . $rowCount, $element['custPincode']);
                $sheet->SetCellValue('I' . $rowCount, $element['custState']);
                $sheet->SetCellValue('J' . $rowCount, $element['custCity']);
                $sheet->SetCellValue('K' . $rowCount, $element['custCode']);
                
                
                
                $letter = 'L';
                foreach ($questions as $key => $value) {
                    $response = $this->db->get_where('tbl_customer_answers',array('custID' => $element['custID'],'empID'=>$element['empId'],'questionCategory' => $_GET['category'],'questionTxt' => $value['questionTxt']))->row_array();
                    if(!empty($response) && $response['isSpecify']==0)
                    {
                        $sheet->setCellValue($letter.$rowCount,$response['selectedOption']);
                    }else if(!empty($response) && $response['isSpecify']==1){
                        $sheet->setCellValue($letter.$rowCount,$response['textAnswer']);
                    }
                    else{
                        $sheet->setCellValue($letter.$rowCount,'');    
                    }
                    
                    $letter++;
                }
                
                $rowCount++;
            }
        }
        $writer = new Xlsx($spreadsheet);
            $writer->save('uploads/'.$fileName);
            header("Content-Type: application/vnd.ms-excel");
            redirect("uploads/".$fileName);
    } 
}