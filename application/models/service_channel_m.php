<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 功能：后台-业务通道管理 -模型 
 * 相关子模块：业务通道管理
 * 涉及表格：yj_service_channel
 * @author Lsen
 * @time 2015.01.16
 *
 */
class Service_channel_m extends CI_Model {
	// 构造函数
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
	}

	// 获取每页文章列表，不包括文章内容字段
	public function get_list($limit,$offset)
	{
	   $this->db->order_by('id desc,add_date desc');
       $query = $this->db->get('yj_service_channel',$limit, $offset);
       return $query->result_array();
	}
	
	//删除文章
	public function del($id) 
	{
		$this->db->where('id', $id);
		if($this->db->delete('yj_service_channel') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	//获得编辑文章
	public function get($id)
	{
		$id = intval($id);
		$this->db->where('id', $id);
		$query = $this->db->get('yj_service_channel');
		if($query->num_rows() != 0) {
			$row = $query->row_array();
			return array(
						'id'		 =>	$id,
						'company'	 =>	$row['company'],
						'phone'	     =>	$row['phone'],
						'client_name'=>	$row['client_name'],
						'email'	     =>	$row['email'],
						'address'	 =>	$row['address'],
						'message'	 =>	$row['message'],
						'add_date'	     =>	$row['add_date'],
					);
		}
		return FALSE;
	}
	
	//编辑文章
	public function edit($id, $data) 
	{   
		$id = (int) $id;
		$array= array(
					'company'	 =>	$data['company'],
					'phone'	     =>	$data['phone'],
					'client_name'=>	$data['client_name'],
					'email'	     =>	$data['email'],
					'address'	 =>	$data['address'],
					'message'	 =>	$data['message'],
					//'add_date'	     =>	$data['add_date'],
					//'add_date'    => time(),
			);
		$this->db->where('id', $id);
		$this->db->update('yj_service_channel', $array);
	}
	
	//获得文章数量
	public function get_num()
	{
		return $this->db->count_all('yj_service_channel');
	}
	
	//分页配置
	public function pageConfig($count)
   {
       $config['base_url'] = 'admin/news';
       $config['total_rows'] = $count;
       $config['per_page'] = 6;
       $config['first_link'] = "首页";
       $config['last_link'] = "末页";
       $config['use_page_numbers'] = TRUE;
       $config['cur_tag_open'] = '<b>';
       $config['cur_tag_close'] = '</b>';
       $this->pagination->initialize($config);
   }
}