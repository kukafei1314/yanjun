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
		$this->load->model('topic_m');
		$this->load->model('partners_m');
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
		
		$per_page = 7;
		$p = (int) page_cur();	// 获取当前页码
		$offset = $per_page*($p-1);
		$num = $this->about_us_m->get_all_num($type);
		
		$query = $this->about_us_m->select_limit($type, $per_page, $offset);
		$data['font'] = $query;
		$data['p'] = $p;
		//echo $num;
		$data['link'] = page_r($num, $per_page);
		$this->load->view('admin/general',$data);
	}
	
	public function add_v() {
		$data['username'] = $this->session->userdata('username');
		$data['type'] = $this->input->get('type');
		$this->load->view('admin/general_add',$data);
	}
	
	public function g_add() {
		$type = $this->input->get('type');
		$arr['title'] = $this->input->post('title');
		$arr['content'] = $this->input->post('content');
		$result = $this->about_us_m->g_add($type,$arr);
		if($result){
			redirect('admin/general/index?type='.$type);
		}
	}
	
	public function delete() {
		$p = (int) page_cur();
		$type = $this->input->get('type');
		$arr['type'] = $type;
		$arr['id'] = $this->input->get('id');
		$result = $this->about_us_m->g_delete($arr);
		if($result){
			redirect('admin/general/index?type='.$type.'&p='.$p);
		}
	}
	
	public function edit() {
		if(!is_post()) {
			$p = (int) page_cur();
			$data['username'] = $this->session->userdata('username');
			$type = $this->input->get('type');
			$id = $this->input->get('id');
			$data['result'] = $this->about_us_m->select_i($type,$id);
			$data['type'] = $type;
			$data['id'] = $id;
			$data['p'] = $p;
			$this->load->view('admin/general_edit',$data);
		}else {
			$p = (int) page_cur();
			$type = $this->input->get('type');
			$arr['id'] = $this->input->get('id');
			$arr['title'] = $this->input->post('title');
			$arr['content'] = $this->input->post('content');
			$result = $this->about_us_m->g_update($type,$arr);
			if($result){
				redirect('admin/general/index?type='.$type.'&p='.$p);
			}else echo "数据更新失败！";
			}
	}
	
	public function topic() {
		$data['username'] = $this->session->userdata('username');
		$query = $this->topic_m->get_all();
		$data['font'] = $query;
		$this->load->view('admin/g_topic',$data);
	}
	public function partners() {
		$data['username'] = $this->session->userdata('username');
		$query = $this->partners_m->get_all();
		$data['font'] = $query;
		$this->load->view('admin/p_topic',$data);
	}	
	public function t_edit() {
		if(!is_post()) {
			$data['username'] = $this->session->userdata('username');
			$id = $this->input->get('id');
			$data['result'] = $this->topic_m->select_i($id);
			$data['id'] = $id;
			$this->load->view('admin/topic_edit',$data);
		}else {
			$arr['id'] = $this->input->get('id');
			$arr['type'] = $this->input->post('title');
			$arr['content'] = $this->input->post('content');
			$result = $this->topic_m->g_update($arr);
			if($result){
				redirect('admin/general/topic');
			}else echo "数据更新失败！";
			}
	}
	public function p_edit() {
		if(!is_post()) {
			$data['username'] = $this->session->userdata('username');
			$id = $this->input->get('id');
			$data['result'] = $this->partners_m->select_i($id);
			$data['id'] = $id;
			$this->load->view('admin/partners_edit',$data);
		}else {
			$arr['id'] = $this->input->get('id');
			$arr['type'] = $this->input->post('title');
			$arr['content'] = $this->input->post('content');
			$result = $this->partners_m->g_update($arr);
			if($result){
				redirect('admin/general/partners');
			}
		}
	}
	
	public function detail() {
		$p = (int) page_cur();
		$data['p'] = $p;
		$data['username'] = $this->session->userdata('username');
		$type = $this->input->get('type');
		$id = $this->input->get('id');
		$data['type'] = $type;
		$data['text'] = $this->about_us_m->select_i($type,$id);
		$this->load->view('admin/g_detail', $data);
	}

}