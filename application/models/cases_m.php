<?php
/**
 * 功能：后台-案例管理 -模型 
 * 相关子模块：案例管理
 * 涉及表格：yj_cases
 * @author lyb
 * @time 2015.01.19
 *
 */
class Cases_m extends CI_Model {
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
       $query = $this->db->get('yj_cases',$limit, $offset);
       return $query->result_array();
	}		
			// 随机获取每页文章列表，不包括文章内容字段
	public function get_list_rand($limit,$offset)
	{
	   $this->db->order_by('id', 'random');
       $query = $this->db->get('yj_cases',$limit, $offset);
       return $query->result_array();
	}		
	
	// 从id获取文章内容
	public function get_id($id)
	{
       $query = $this->db->get_where('yj_cases',array('id' => $id));
       return $query->result_array();
	}
	
		//删除文章
	public function del($id) 
	{
		$this->db->where('id', $id);
		if($this->db->delete('yj_cases') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
	
		//添加文章
	public function add($name, $project, $logo, $images, $content, $abstract) 
	{
		$data = array(
					'name'		=>	$name,
					'project'	=>	$project,
					'logo'		=>	$logo,
					'images'	=>	$images,
					'content'	=>	$content,
					'abstract'	=>	$abstract,
					'date'	    =>	time(),
				);
		if($this->db->insert('yj_cases', $data) === FALSE) {
			return FALSE;
		}
		return $this->db->insert_id();
	}	
	
		//获得编辑文章
	public function get($id)
	{
		$id = intval($id);
		$this->db->where('id', $id);
		$query = $this->db->get('yj_cases');
		if($query->num_rows() != 0) {
			$row = $query->row_array();
			return array(
						'id'		=>	$id,
						'name'		=>	$row['name'],
						'project'	=>	$row['project'],
						'logo'		=>	$row['logo'],
						'content'	=>	$row['content'],
						'abstract'	=>	$row['abstract'],
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
		if ($data['images'] == '') {
			$array= array(
				'name'		=>	$data['name'],
				'project'	=>	$data['project'],
				'logo'		=>	$data['logo'],
				'content'	=>	$data['content'],
				'abstract'	=>	$data['abstract'],
				'date'    => time(),
			);
		} else {
		$array= array(
				'name'		=>	$data['name'],
				'project'	=>	$data['project'],
				'logo'		=>	$data['logo'],
				'content'	=>	$data['content'],
				'abstract'	=>	$data['abstract'],
				'images'	=>	$data['images'],
			    'date'    => time(),
            );
		}
		$this->db->where('id', $id);
		$this->db->update('yj_cases', $array);
	}
	//获得文章数量
	public function get_num()
	{
		return $this->db->count_all('yj_cases');
	}
	
	//分页配置
	public function pageConfig($count)
   {
       $config['base_url'] = 'admin/cases';
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