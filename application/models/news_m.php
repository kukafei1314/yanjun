<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 功能：后台-新闻管理 -模型 
 * 相关子模块：新闻管理
 * 涉及表格：yj_news
 * @author Lsen
 * @time 2015.01.16
 *
 */
class News_m extends CI_Model {
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
	   $this->db->order_by('id desc,date desc');
       $query = $this->db->get('yj_news',$limit, $offset);
       return $query->result_array();
	}
	
	//删除文章
	public function del($id) 
	{
		$this->db->where('id', $id);
		if($this->db->delete('yj_news') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
	//添加文章
	public function add($title, $images, $content) 
	{
		$data = array(
					'title'		=>	$title,
					'images'	=>	$images,
					'content'	=>	$content,
					'date'	    =>	time(),
				);
		if($this->db->insert('yj_news', $data) === FALSE) {
			return FALSE;
		}
		return $this->db->insert_id();
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
						'date'	    =>	$row['date'],
					);
		}
		return FALSE;
	}
	
	//编辑文章
	public function edit($id, $data) 
	{   
		$id = (int) $id;
		$array= array(
			   'id'		 =>	$id,
               'title'   => $data['title'] ,
               'content' => $data['content'],
			   'images'  => $data['images'] ,
			   'date'    => time(),
            );
		$this->db->where('id', $id);
		$this->db->update('yj_news', $data);
	}
	
	//获得文章数量
	public function get_num()
	{
		return $this->db->count_all('yj_news');
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