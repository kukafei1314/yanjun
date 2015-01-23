<?php
/**
 * 功能：后台-页面标语管理 -模型 
 * 相关子模块：服务、关于我们、分享中心
 * 涉及表格：yj_topic
 * @author shanlq
 * @time 2015.01.23
 *
 */
class Topic_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
	}
	
	public function get_all() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('yj_topic');
		if($query) {
			return $query->result_array();
		} else {
			return false;
		}	
	}
	
	public function select_i($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('yj_topic');
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
		$this->db->update('yj_topic',$data);
		return $this->db->affected_rows();	
	}
	
}