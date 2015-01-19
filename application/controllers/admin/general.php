<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台常规项目管理控制器
 * 
 * @author shanlq
 * @version 1.0 2015-01-17
 */
class General extends CI_Controller { 
	function __construct() {
		parent::__construct();
		$this->load->model('about_us_m');
		$this->load->helper('form');
		$this->load->helper('url');
		
		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}
	}
	
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$type = $this->input->get('type');
		$data['type'] = $type;
		//$data['font'] = $this->about_us_m->get_all($type); 
		$num = $this->about_us_m->get_all_num($type);
		//echo $num;
		$arr = $this->page($type, $num);
		$data['font'] = $arr['font'];
		$data['link'] = $arr['key'];
		$this->load->view('admin/general',$data);
	}
	
	public function add_v() {
		$data['username'] = $this->session->userdata('username');
		$data['type'] = $this->input->get('type');
		$this->load->view('admin/general_add',$data);
	}
	
	public function g_add() {
		$type = $this->input->get('type');
		if($type == 2) {
			$arr['content'] = $this->input->post('content');
		}else {
				$arr['title'] = $this->input->post('title');
				$arr['content'] = $this->input->post('content');
			}
		$result = $this->about_us_m->g_add($type,$arr);
		if($result){
			redirect('admin/general/index?type='.$type);
		}else echo "导入数据失败！";
	}
	
	public function delete() {
		$type = $this->input->get('type');
		$arr['type'] = $type;
		$arr['id'] = $this->input->get('id');
		$result = $this->about_us_m->g_delete($arr);
		if($result){
			redirect('admin/general/index?type='.$type);
		}else echo "数据删除失败！";	
	}
	
	public function edit() {
		if(!is_post()) {
			$data['username'] = $this->session->userdata('username');
			$type = $this->input->get('type');
			$id = $this->input->get('id');
			$data['result'] = $this->about_us_m->select_i($type,$id);
			$data['type'] = $type;
			$data['id'] = $id;
			$this->load->view('admin/general_edit',$data);
		}else {
			$type = $this->input->get('type');
			$arr['id'] = $this->input->get('id');
			if($type == 2) {
				$arr['content'] = $this->input->post('content');
			}else {
					$arr['title'] = $this->input->post('title');
					$arr['content'] = $this->input->post('content');
				}
			//echo $this->input->post('title');
			$result = $this->about_us_m->g_update($type,$arr);
			if($result){
				redirect('admin/general/index?type='.$type);
			}else echo "数据更新失败！";
			}
	}
	
	//分页函数
	function page($type, $num){
		$pagesize = 5;
		$p = $this->input->get('per_page',TRUE);
		if($p){
			$page = $p;	
		}else $page = 1;
		$offset = ($page-1)*$pagesize;
		
		$query = $this->about_us_m->select_limit($type, $pagesize, $offset);
		$data['font'] = $query;
		
		$this->load->library('pagination');
		$config['base_url'] = "general/index?type=$type";
		$config['page_query_string'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $num;
		$config['per_page'] = $pagesize; 
		$config['num_links'] = 2;
		$config['prev_tag_open'] = '<span>';
		$config['prev_link'] = '上一页';
		$config['prev_tag_close'] = '</span>';
		$config['cur_tag_open'] = '<b>'; // 当前页开始样式
		$config['cur_tag_close'] = '</b>'; // 当前页结束样式
		$config['next_tag_open'] = '<span>';
		$config['next_link'] = '下一页';			
		$config['next_tag_close'] = '</span>';
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';

		$this->pagination->initialize($config); 
		$data['key'] = $this->pagination->create_links();
		return $data;
	}
	
}