<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Common_model extends CI_Model {

	public function __construct() {

		parent::__construct();

	}

	public function getRecordCount($categoryID)
	{
		$this->db->select('COUNT(custID) AS recordCnt');
        $this->db->from('tbl_customer_answers');
        $this->db->where('questionCategory',$categoryID);
        $this->db->group_by('custID,questionCategory'); 
        return $result = $this->db->get()->result_array(); 
	}

    public function db_update($tablename, $fieldarray, $columnname, $value) {

		$this->db->where($columnname, $value);

		return $this->db->update($tablename, $fieldarray);

	}

    public function insertRecord($tbl_name, $data_array, $insert_id = FALSE) {

		$this->db->cache_delete_all();

		foreach (array_keys($data_array) as $a) {

			if (!$this->db->field_exists($a, $tbl_name)) {

				unset($data_array[$a]);

			}

		}

		if ($this->db->insert($tbl_name, $data_array)) {

			return $this->db->insert_id();

			/*if($insert_id==true)

				{return $this->db->insert_id();}

				else

			*/

		} else {return false;}

	}

    public function getRow($tbl_name, $condition = FALSE, $select = FALSE, $order_by = array(), $start = FALSE, $limit = FALSE) {

		$this->db->cache_delete_all();

		if ($select != "") {$this->db->select($select, FALSE);}

		if (count((array) $condition) > 0 && $condition != "") {$condition = $condition;} else { $condition = array();}

		if (count((array) $order_by) > 0 && $order_by != "") {

			foreach ($order_by as $key => $val) {$this->db->order_by($key, $val);}

		}

		if ($limit != "" || $start != "") {$this->db->limit($limit, $start);}

		$rst = $this->db->get_where($tbl_name, $condition);

		$result_array = array();

		if ($rst) {

			$result_array = $rst->row_array();

		}

		return $result_array;

	}

	public function getRows($tbl_name, $condition = FALSE, $select = FALSE, $order_by = array(), $start = FALSE, $limit = FALSE) {

		$this->db->cache_delete_all();

		if ($select != "") {$this->db->select($select, FALSE);}

		if (count((array) $condition) > 0 && $condition != "") {$condition = $condition;} else { $condition = array();}

		if (count((array) $order_by) > 0 && $order_by != "") {

			foreach ($order_by as $key => $val) {$this->db->order_by($key, $val);}

		}

		if ($limit != "" || $start != "") {$this->db->limit($limit, $start);}

		$rst = $this->db->get_where($tbl_name, $condition);

		$result_array = array();

		if ($rst) {

			$result_array = $rst->result_array();

		}

		return $result_array;

	}
}