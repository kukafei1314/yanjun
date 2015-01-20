<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台上传图片
 * 作者：mm
 * 日期：2015.1.2
 */
class Home_pic extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
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
	
	public function updatePic()
	{
		$pid   = $this->input->post('pid');
		$old_file_url = $this->home_pic_m->get_url($pid);
		$config = array(
				"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
				"maxSize" => 50000000, //单位KB
				"allowFiles" => array( ".jpg" , ".png" , ".bmp" , ".gif" ,"tiff" )
		);
		$pic = new Uploader_ue( "pic" , $config);
		$info = $pic->getFileInfo();
		if($info['state'] == 'SUCCESS') {
			$file_url = $info['url'];
		} else {
			$file_url = $old_file_url;
		}
	    $article['order'] = $this->input->post('order');
		$article['path']   = $file_url;
	    $this->home_pic_m->update_pic($pid,$article); 
	    redirect('admin/home_pic');
	}
}