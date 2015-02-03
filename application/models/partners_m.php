<?php
/**
 * 功能：后台-页面投资伙伴
 * 相关子模块：投资伙伴
 * 涉及表格：yj_partners
 * @author lyb
 * @time 2015.02.03
 *
 */
class Partners_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
	}
	
	public function get_all() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('yj_partners');
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}	
	}
	
	public function select_i($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('yj_partners');
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}
	}
	
	public function g_update($arr){
		$data['type'] = $arr['type'];
		$data['content'] = $arr['content'];
		$this->db->where('id',$arr['id']);
		$this->db->update('yj_partners',$data);
		return $this->db->affected_rows();	
	}
	
}