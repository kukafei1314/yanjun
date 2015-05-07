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
		$this->load->model(array('login_m','home_pic_m','brand_intro_m'));
		
		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}
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
	
	public function brand_info()
	{
		$data['username'] = $this->session->userdata('username');
		$data['brand']    = $this->brand_intro_m->get_list();
		$this->load->view('admin/brand_info_list',$data);
	}
	
	public function brand_info_edit_v()
	{
		$bid = $this->input->get('bid');
		$data['username'] = $this->session->userdata('username');
		$data['brand']    = $this->brand_intro_m->get($bid);
		$data['form_url'] = 'admin/index/brand_info_edit?id='.$bid;
		$this->load->view('admin/brand_info_edit',$data);
	}
	
	public function brand_info_edit()
	{
		$id = (int) $this->input->get('id');
		$data['content'] = $this->input->post('ue_abstract');
		$data['name'] = $this->input->post('brand_name');
		$data['en_name'] = $this->input->post('brand_en_name');
		$config = array(
    			"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
    			"maxSize" => 50000000 , //单位KB
    			"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
	    );
    	$pic = new Uploader_ue( "pic" , $config);
    	$info = $pic->getFileInfo();
    	if($info['state'] == 'SUCCESS') {
    		$data['pic'] = $info['url'];
    	} else {
    		$data['pic'] = '';
    	}
		$this->brand_intro_m->edit($id, $data);
		redirect('admin/index/brand_info');
	}
}