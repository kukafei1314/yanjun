<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-11
 */
class Type extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('type_m');
		$this->load->helper('form');
		
		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}
		
	}
	
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$type = $this->input->get('type',true);
		$data['type'] = $type;
		
		$per_page = 10;
		$p = (int) page_cur();	// 获取当前页码
		$offset = $per_page*($p-1);
		$num = $this->type_m->get_all_num($type);
		$data['link'] = page($num, $per_page);
		
		$data['types'] = $this->type_m->get_all($type);
		$this->load->view('admin/type',$data);
	}
	
	public function add()
	{
		$data['type'] = $this->input->get('type',true);
		if(is_post()) {
			$name = $this->input->post('name', TRUE);
			$content = $this->input->post('content', TRUE);
			$this->type_m->add_type($name,$content,$data['type']);
			redirect('admin/type?type='.$data['type']);
			
		} else {
			$data['name'] = '';
			$data['content'] = '';
			$data['username'] = $this->session->userdata('username');
			$data['form_url'] = 'admin/type/add?type='.$data['type'];
			$this->load->view('admin/type_add.php',$data);
		}
	}
	
	public function edit()
	{
		$data['type'] = $this->input->get('type',true);
		$tid = $this->input->get('tid',true);
		if(is_post()) {
			$name = $this->input->post('name', TRUE);
			$content = $this->input->post('content', TRUE);
			$this->type_m->update_type($tid,$name,$content,$data['type']);
			redirect('admin/type?type='.$data['type']);	
		} else {
			$result = $this->type_m->get_single_name($tid,$data['type']);
			$data['name'] = $result[0]['name'];
			if ($data['type'] != 1) {
				$data['content'] = $result[0]['content'];
			}
			$data['username'] = $this->session->userdata('username');
			$data['form_url'] = 'admin/type/edit?type='.$data['type'].'&tid='.$tid;
			$this->load->view('admin/type_add.php',$data);
		}
	}
}