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
	public function add_type($name,$content, $type)
	{
		$table = $this->get_table($type);
		if ($content) {
			$data = array(
					'name'    => $name,
					'content' => $content,
			);
		} else {
			$data = array(
					'name' => $name,
			);
			
		}
		if ($this->db->insert($table,$data))
		{
			return true;
		}
	}
	
	//编辑大图类别或部门类别和部门简介
	public function update_type($tid,$name,$content,$type)
	{
		$table = $this->get_table($type);
		if ($content) {
			$data = array(
					'name'    => $name,
					'content' => $content,
			);
		} else {
			$data = array(
					'name' => $name,
			);
		}
		
		$this->db->where('tid',$tid);
		$this->db->update($table,$data);
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
		$data = $query->result_array();
		return $data;
	}

	public function get_table($type)
	{
		if($type == '1') {
			$table = 'yj_image_type';
		} else {
			$table = 'yj_department_type';
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
}