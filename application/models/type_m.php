<?php
/**
 * 类别管理模型
 * @author lizzyphy
 *
 */
class Type_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
	}

	public function get_all($type) 
	{
		$table = $this->get_table($type);
		$query = $this->db->get($table);
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	
	public function select_limit($type, $pagesize, $offset) {
		$tab = $this->get_table($type);
		$this->db->select('*');
		$this->db->order_by('tid','asc');
		$this->db->limit($pagesize, $offset);
		$query = $this->db->get($tab);
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}		
	}
	//添加大图类别或部门类别和部门简介
	public function add_type($data)
	{
		$table = $this->get_table($data['type']);
		if ($data['type'] == '2') {
			$arr = array(
					'name'    => $data['name'],
					'e_mail'  => $data['e_mail'],
					'content' => $data['content'],
					'recruit_name' => $data['recruit_name']
			);
		} else {
			$arr = array(
					'name' => $data['name']
			);
			
		}
		if ($this->db->insert($table,$arr))
		{
			return true;
		}
	}
	
	//编辑大图类别或部门类别和部门简介
	public function update_type($type,$tid,$data)
	{
		$table = $this->get_table($type);
		if ($type == '2') {
			$arr = array(
					'name'    => $data['name'],
					'e_mail'  => $data['e_mail'],
					'content' => $data['content'],
					'recruit_name' => $data['recruit_name']
			);
		} else if($type == '1'){
			$arr = array(
					'name' => $data['name']
			);
		} else {
			$arr = array(
					'name'    => $data['name'],
					'en_name'  => $data['en_name'],
					'content' => $data['content']
			);
		}
		$this->db->where('tid',$tid);
		$this->db->update($table,$arr);
	}
	
	//删除大图类别或部门类别
	public function t_delete($arr) {
		$tab = $this->get_table($arr['type']);
		$this->db->where('tid',$arr['tid']);
		$this->db->delete($tab);
		return $this->db->affected_rows();
	}
	
	public function get_single_name($tid,$type)
	{
		$table = $this->get_table($type);
		$this->db->where('tid',$tid);
		$query = $this->db->get($table);
		$data = $query->row_array();
		return $data;
	}

	public function get_table($type)
	{
		if($type == '1') {
			$table = 'yj_image_type';
		} else if($type == '2'){
			$table = 'yj_department_type';
		} else {
			$table = 'yj_cases_type';
		}
		return $table;
	}
	
	public function get_all_num($type) {
		$tab = $this->get_table($type);
		$this->db->select('*');
		$this->db->from($tab);
		return $this->db->count_all_results();
	}
	
	public function select_i($type,$id) {
		$tab = $this->get_table($type);
		$this->db->where('tid',$id);
		$query = $this->db->get($tab);
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	
	public function get_type_name($type) {
		if($type == 1) {
			return '大图';
		} else if($type == 2) {
			return '部门';
		} else {
			return '案例';
		}
	}
}