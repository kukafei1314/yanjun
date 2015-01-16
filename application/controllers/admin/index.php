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
	}
	
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/index',$data);
	}
	
	public function logout()
	{
		$this->login_m->logout();
		redirect('admin');
	}
}