<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-11
 */
class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('captcha_np');
		$this->load->model('login_m');
	}
	
	public function index()
	{
		if (is_post()) {
			$this->_login();
		} else {
			$this->load->view('admin/login');
		}
	}
	
	/**
	 * 验证码图片生成
	 * 
	 * TODO 需要加上header防止缓存
	 */
	public function captcha() 
	{
		$this->captcha_np->setStyle(1);
		$this->captcha_np->setBgColor(array(0, 23, 33));
		$this->captcha_np->setFontColor(array(255, 255, 235));
		
		$this->session->set_userdata('admin_img_check', $this->captcha_np->getStr());
		$check_num = $this->captcha_np->getStr();
		echo json_encode($check_num);
		//$this->captcha_np->display();
	}
	
	/**
	 * 登录的控制器
	 */
	private function _login() 
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check_num = $this->input->post('check_num');
		
		$img_check = $this->session->userdata('admin_img_check');
		$this->session->unset_userdata('admin_img_check');
		if ($img_check == FALSE || $img_check != $check_num) {
			$this->pub_error('验证码错误');
		}
		
		$uid = $this->login_m->login($username, $password);
		if ($uid < 0) {
			$this->pub_error('用户名或者密码错误');
		}
		redirect('admin');
	}
	
	/**
	 * 登录显示错误页面
	 * @param string $msg
	 */
	private function pub_error($msg) 
	{
		load_vars('error', $msg);
		load_view('admin/login');
		$this->output->_display();
		exit;
	}
}