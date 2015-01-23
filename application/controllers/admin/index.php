<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-11
 */
class Index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_m');
		
		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}
		
		$this->load->model('home_pic_m');
		$this->load->library('uploader_ue');
	}
	
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
	    $data['home_pic'] = $this->home_pic_m->home_pic_list();
	    $this->load->view('admin/home_pic',$data);
	}
	
	public function logout()
	{
		$this->login_m->logout();
		redirect('admin');
	}
	
	public function reset_password()
	{
		$id = $this->session->userdata('id');
		$old_password = $this->input->post('old_password');
		$new_password = $this->input->post('new_password');
		$data = $this->login_m->change_pw($id,$old_password,$new_password);
		echo json_encode($data);
	}
}