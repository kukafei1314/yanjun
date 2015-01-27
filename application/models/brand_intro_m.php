<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 功能：首页品牌介绍 
 * 相关子模块：首页品牌介绍
 * 涉及表格：yj_brand_intro
 * @author mm
 * @time 2015.01.27
 *
 */
class Brand_intro_m extends CI_Model {
	// 构造函数
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// 获取每页文章列表，不包括文章内容字段
	public function get_list()
	{
       $query = $this->db->get('yj_brand_intro');
       return $query->result_array();
	}	
	
	//获得编辑文章
	public function get($id)
	{
		$id = intval($id);
		$this->db->where('id', $id);
		$query = $this->db->get('yj_news');
		if($query->num_rows() != 0) {
			$row = $query->row_array();
			return array(
						'id'		=>	$id,
						'title'		=>	$row['title'],
						'content'	=>	$row['content'],
						'images'	=>	$row['images'],
						'add_date'	=>	$row['add_date'],
					);
		}
		return FALSE;
	}
	
	//编辑文章
	public function edit($id, $data) 
	{   
		$id = (int) $id;
		if ($data['images'] == '') {
			$array= array(
					'title'   => $data['title'] ,
					'content' => $data['content'],
					'add_date'    => time(),
			);
		} else {
			$array= array(
					'title'   => $data['title'] ,
					'content' => $data['content'],
					'images'  => $data['images'] ,
					'add_date'    => time(),
			);
		}
		
		$this->db->where('id', $id);
		$this->db->update('yj_news', $array);
	}
}