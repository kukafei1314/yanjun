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
		//检验是否已经登陆
		$id = $this->login_m->check_login();
		if ($id > 0) {
			redirect('admin/index');
		}
	}
	
	public function index()
	{
		//if (is_post()) {
			//$this->get_login();
		//} else {
			$this->load->view('admin/login');
		//}
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
		$this->session->unset_userdata('admin_img_check');
		$this->session->set_userdata('admin_img_check', $this->captcha_np->getStr());
		$check_num = $this->captcha_np->getStr();
		echo json_encode($check_num);
		//$this->captcha_np->display();
	}
	
	/**
	 * 登录的控制器
	 */
	public function get_login() 
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check_num = $this->input->post('check_num');
		$img_check = $this->session->userdata('admin_img_check');
		$uid = $this->login_m->login($username, $password);
		if ($img_check == FALSE || $img_check != $check_num) {
			$error = 1;
			//$this->pub_error($error);
			echo json_encode($error);
		}elseif ($uid < 0) {
			$error = 2;
			//$this->pub_error($error);
			echo json_encode($error);
		} else {
			redirect('admin');
		}
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