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
        $data['questions'] = json_decode(getQuestion());
        $data['title'] = 'Dashboard';
        $data['main_content'] = 'entertheadmin/dashboard';
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
        /*if (!empty($where_search)) {
            $this->db->where($where_search);
        }*/
       /* $this->db->select('*');
        $this->db->from('tbl_customer_answers AS CA');
        $this->db->join('tbl_customer AS C ON C.custID = CA.custID','left');
        $this->db->join('tbl_employee AS E ON E.empId = CA.empID','left');*/
        $sql = "SELECT * FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId  WHERE ".$where_search;

        $all_records_count = $this->db->query($sql)->num_rows();
        //echo $this->db->last_query();
        
        $config = array();
        $config["base_url"] = site_url() . "/" . ADMIN_FOLDER_NAME . "/dashboard/{$data['sort_by']}/{$data['sort_order']}" . $append_link;
        $config["total_rows"] = $all_records_count;
        $config["per_page"] = 20;
        $config["uri_segment"] = $paging_seg;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 6;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment($paging_seg)) ? $this->uri->segment($paging_seg) : 0;
        $data['page_no'] = $page;

        
        $sql = "SELECT * FROM `tbl_employee` AS E LEFT JOIN `tbl_customer` AS C ON C.addedBy = E.empId WHERE ".$where_search." ORDER BY E.empId desc LIMIT ".$page.", 20";
        $query = $this->db->query($sql);
        $data["records"] = FALSE;
        if ($query->num_rows() > 0) {
            $data["records"] = $query->result();
        }
        $data["links"] = $this->pagination->create_links();
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
            $sheet->SetCellValue('D1', 'Customer Location');
            $sheet->SetCellValue('E1', 'Customer Age');
            $sheet->SetCellValue('F1', 'Customer Gender');
            $sheet->SetCellValue('G1', 'Customer No Of Member In Family');
            $sheet->SetCellValue('H1', 'EFL Product');
            $sheet->SetCellValue('I1', 'Create Date'); 

            $rowCount = 2;
            foreach ($response as $element) {
                $sheet->SetCellValue('A' . $rowCount, $element['custName']);
                $sheet->SetCellValue('B' . $rowCount, $element['custEmail']);
                $sheet->SetCellValue('C' . $rowCount, $element['custPhoneNumber']);
                $sheet->SetCellValue('D' . $rowCount, $element['custLocation']);
                $sheet->SetCellValue('E' . $rowCount, $element['custAge']);
                $sheet->SetCellValue('F' . $rowCount, $element['custSex']);
                $sheet->SetCellValue('G' . $rowCount, $element['custNoOfMemeberInFamily']);
                $sheet->SetCellValue('H' . $rowCount, $element['custEFL']);
                $sheet->SetCellValue('I' . $rowCount, $element['dateAdded']);
                

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
}