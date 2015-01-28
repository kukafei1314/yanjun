<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 前台业务通道管理控制器
 * 
 * @author Lsen
 * @version 1.0 2015-01-16
 */
class Servicechannel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model(array('service_channel_m','home_pic_m'));
		$this->load->library('captcha_np');
		$this->load->helper('form');
	}
	
	public function index()
	{   
		$data['pro'] = $this->service_channel_m->get_prolist(); 
		$data['imgs'] = $this->home_pic_m->pic_info(8);
		$this->load->view('subBusiness',$data);
	}
	//添加用户信息
	public function add() 
	{
		$company = $this->input->post('company');
		$phone = $this->input->post('phone');
		$client_name = $this->input->post('client_name');
		$email = $this->input->post('email');
		$address = $this->input->post('address');		
		$message = $this->input->post('message');
		$this->service_channel_m->add($company, $phone, $client_name,$email, $address, $message);
		redirect('servicechannel');
	}	
	//业务详情
	public function businesspro() 
	{   
		$per_page = 5;			
		$p = (int) page_cur();	// 获取当前页码	
		$data['p'] = $p;		
	    $data['pro'] = $this->service_channel_m->get_pro_list($per_page,$per_page*($p-1));
		$data['page_html']	  =	page($this->service_channel_m->get_pro_num(), $per_page);
		$data['imgs'] = $this->home_pic_m->pic_info(8);
		$this->load->view('busi_problem',$data);
	}
 /* 	// 验证码模块
	public function captcha() 
	{
		$this->captcha_np1->setStyle(1);
		$this->captcha_np1->setBgColor(array(0, 23, 33));
		$this->captcha_np1->setFontColor(array(255, 255, 235));
		$_SESSION['check'] = $this->captcha_np1->getStr();
		$this->captcha_np1->display();
		//echo $_SESSION['check'];
		
	}  */
	
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
		$check_num = $this->captcha_np->getStr();
		echo json_encode($check_num);
	} 
	
}