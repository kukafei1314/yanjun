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
		
		//分页
		$per_page = 10;
		$p = (int) page_cur();	// 获取当前页码
		$offset = $per_page*($p-1);
		$num = $this->type_m->get_all_num($type);
		$data['link'] = page_r($num, $per_page);
		$data['p'] = $p;
		$data['types'] = $this->type_m->select_limit($type, $per_page, $offset);
		$data['type_name'] = $this->type_m->get_type_name($type);
		$this->load->view('admin/type',$data);
	}
	
	public function add()
	{
		$p = (int) page_cur();
		$data['type'] = $this->input->get('type',true);
		if(is_post()) {
			$data['name'] = $this->input->post('name', TRUE);
			$data['content'] = $this->input->post('content', TRUE);
			$data['e_mail'] = $this->input->post('e_mail', TRUE);
			$this->type_m->add_type($data);
			redirect('admin/type?type='.$data['type']);
			
		} else {
			$data['name'] = '';
			$data['content'] = '';
			$data['e_mail'] = '';
			$data['username'] = $this->session->userdata('username');
			$data['form_url'] = 'admin/type/add?type='.$data['type'];
			$data['type_name'] = $this->type_m->get_type_name($type);
			$this->load->view('admin/type_add',$data);
		}
	}
	
	public function edit()
	{
		$p = (int) page_cur();
		$data['p'] = $p;
		$type = $this->input->get('type',true);
		$tid = $this->input->get('tid',true);
		if(is_post()) {
			$data['name'] = $this->input->post('name', TRUE);
			$data['e_mail'] = $this->input->post('e_mail', TRUE);
			$data['content'] = $this->input->post('content', TRUE);
			$data['en_name'] = $this->input->post('en_name', TRUE);
			$this->type_m->update_type($type,$tid,$data);
			redirect('admin/type?type='.$type.'&p='.$p);	
		} else {
			$data = $this->type_m->get_single_name($tid,$type);
			$data['type'] = $type;
			$data['type_name'] = $this->type_m->get_type_name($type);
			$data['username'] = $this->session->userdata('username');
			$data['form_url'] = 'admin/type/edit?type='.$type.'&tid='.$tid;
			$this->load->view('admin/type_add',$data);
		}
	}
	
	public function delete() {
		$p = (int) page_cur();
		$type = $this->input->get('type');
		$arr['type'] = $type;
		$arr['tid'] = $this->input->get('tid');
		$result = $this->type_m->t_delete($arr);
		if($result){
			redirect('admin/type/index?type='.$type.'&p='.$p);
		}else echo "数据删除失败！";	
	}
	
	public function detail() {
		$p = (int) page_cur();
		$data['p'] = $p;
		$data['username'] = $this->session->userdata('username');
		$type = $this->input->get('type');
		$id = $this->input->get('tid');
		$data['type'] = $type;
		$data['text'] = $this->type_m->select_i($type,$id);
		$this->load->view('admin/type_detail.php', $data);
	}
}