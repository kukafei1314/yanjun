<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('about_us_m','topic_m','home_pic_m'));
	}
	
	
	public function index()
	{	
		$type = 1;
		$per_page = 3;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['result']  = $this->about_us_m->select_limit($type,$per_page,$per_page*($p-1));
		$data['page_html']	  =	page($this->about_us_m->get_all_num($type), $per_page);
		$data['res_topic'] = $this->topic_m->get_all();
		$data['imgs'] = $this->home_pic_m->pic_info(4);
		$this->load->view('service',$data);
	}
}