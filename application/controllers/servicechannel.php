<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 前台业务通道管理控制器
 * 
 * @author Lsen
 * @version 1.0 2015-01-16
 */
class servicechannel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('service_channel_m');
		//$this->load->model('problem_m');
		$this->load->helper('form');
	}
	
	public function index()
	{   
		$data['pro'] = $this->service_channel_m->get_prolist(); 
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
	    $data['pro'] = $this->service_channel_m->get_prolist();
		$this->load->view('busi_problem',$data);
	}
}