<?php
/**
 * 功能：后台-常规项目管理 -模型 
 * 相关子模块：服务、我们、分享中心、常见问题模块
 * 涉及表格：yj_about_us、yj_questions、yj_service、yj_share
 * @author lizzyphy
 * @time 2015.01.16
 *
 */
class About_us_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
	}
	
	public function select_tab($type) {
		switch($type) {
			case 1: 
				$tab = 'yj_service';
				break;
			case 2: 
				$tab = 'yj_about_us';
				break;
			case 3: 
				$tab = 'yj_share';
				break;
			case 4: 
				$tab = 'yj_questions';
		}
		return $tab;
	}
	
	public function get_all($type) {
		$tab = $this->select_tab($type);
		$this->db->order_by('id','asc');
		$query = $this->db->get($tab);
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}	
	}
	
	public function get_all_num($type) {
		$tab = $this->select_tab($type);
		$this->db->select('*');
		$this->db->from($tab);
		return $this->db->count_all_results();
	}
	
	public function select_limit($type, $pagesize, $offset) {
		$tab = $this->select_tab($type);
		$this->db->select('*');
		$this->db->order_by('id','asc');
		$this->db->limit($pagesize, $offset);
		$query = $this->db->get($tab);
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}		
	}
	
	public function select_i($type,$id) {
		$tab = $this->select_tab($type);
		$this->db->where('id',$id);
		$query = $this->db->get($tab);
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	
	public function g_add($type,$arr) {
		$tab = $this->select_tab($type);
		switch($type) {
			case 1:
				$data['service_area'] = $arr['title'];
				$data['content'] = $arr['content'];
				break;
			case 2;
			case 3;
			case 4:
				$data['title'] = $arr['title'];
				$data['content'] = $arr['content'];
				break;
		}	
		$this->db->insert($tab,$data);
		return $this->db->affected_rows();
	}
	
	public function g_delete($arr) {
		$tab = $this->select_tab($arr['type']);
		$this->db->where('id',$arr['id']);
		$this->db->delete($tab);
		return $this->db->affected_rows();
	}
	
	public function g_update($type,$arr){
		$tab = $this->select_tab($type);
		switch($type) {
			case 1:
				$data['service_area'] = $arr['title'];
				$data['content'] = $arr['content'];
				break;
			case 2;
			case 3;
			case 4:
				$data['title'] = $arr['title'];
				$data['content'] = $arr['content'];
				break;
		}
		$this->db->where('id',$arr['id']);
		$this->db->update($tab,$data);
		return $this->db->affected_rows();	
	}
	
	public function get($type,$id) {
		$id = intval($id);
		$tab = $this->select_tab($type);
		$this->db->where('id',$id);
		$query = $this->db->get($tab);
		if ($query->num_rows() != 0) {
			$row = $query->row_array();
			return array(
				'title'   => $row['title'],
				'content' => $row['content'],
			);
		}
		return FALSE;
	}
}