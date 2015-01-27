<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台新闻管理控制器
 * 
 * @author Lsen
 * @version 1.0 2015-01-16
 */
class servicechannel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('login_m');
		//$this->load->library('uploader_ue');
		
		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}
		$this->load->model('service_channel_m');
		$this->load->helper('form');
	}
	
	//获取表格数据，显示业务列表
	public function index()
	{
		$per_page = 10;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['servicechannel'] = $this->service_channel_m->get_list($per_page,$per_page*($p-1)); 
		$data['page_html']	  =	page($this->service_channel_m->get_num(), $per_page);
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/service_list',$data);
	}
	
	//删除业务
	public function del() 
	{
		$p = (int) page_cur();	// 获取当前页码
		$id = (int) $this->input->get('id');
		if($id < 1) {
			redirect('admin/servicechannel');
		}
		$this->service_channel_m->del($id);
		redirect('admin/servicechannel?p='.$p);
	}
	
	//编辑业务
	public function edit() 
	{
		$p = (int) page_cur();	// 获取当前页码
		$id = (int) $this->input->get('id');
		$data['company'] = $this->input->post('company');
		$data['phone'] = $this->input->post('phone');
		$data['client_name'] = $this->input->post('client_name');
		$data['email'] = $this->input->post('email');
		$data['address'] = $this->input->post('address');
		$data['message'] = $this->input->post('ue_content');
		//if($data['company'] === FALSE || $data['phone'] === FALSE || $data['client_name'] === FALSE || $data['email'] === FALSE || $data['address'] === FALSE ) {
		//	redirect('admin/servicechannel');
		//}
		$this->service_channel_m->edit($id, $data);
		redirect('admin/servicechannel?p='.$p);
	}
    //编辑业务
	public function edit_v() 
	{
		$data['p'] = (int) page_cur();	// 获取当前页码
		$data['username'] = $this->session->userdata('username');
		$data['id'] = (int) $this->input->get('id');
		$servicechannel = $this->service_channel_m->get($data['id']);
		if($servicechannel === FALSE) {
			redirect('admin/servicechannel');
		}
		$data['company'] = $servicechannel['company'];
		$data['phone'] = $servicechannel['phone'];
		$data['client_name'] = $servicechannel['client_name'];
		$data['email'] = $servicechannel['email'];
		$data['address'] = $servicechannel['address'];
		$data['message'] = $servicechannel['message'];
		$data['form_url'] = 'admin/servicechannel/edit?id=' . $data['id'].'&p='.$data['p'];
		$this->load->view('admin/service_edit.php', $data);
	}
	
	//业务详情
	public function service() 
	{
		$data['p'] = (int) page_cur();	// 获取当前页码
		$data['username'] = $this->session->userdata('username');
		$data['id'] = (int) $this->input->get('id');
		$servicechannel = $this->service_channel_m->get($data['id']);
		if($servicechannel === FALSE) {
			redirect('admin/servicechannel');
		}
		$data['company'] = $servicechannel['company'];
		$data['phone'] = $servicechannel['phone'];
		$data['client_name'] = $servicechannel['client_name'];
		$data['email'] = $servicechannel['email'];
		$data['address'] = $servicechannel['address'];
		$data['message'] = $servicechannel['message'];
		//$data['form_url'] = 'admin/servicechannel/edit?id=' . $data['id'].'&p='.$data['p'];
		$this->load->view('admin/service.php', $data);
	}
}