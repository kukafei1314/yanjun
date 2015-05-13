<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Share extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('about_us_m','home_pic_m','topic_m'));
		$this->load->model('partners_m');
	}
	
	public function index()
	{	
		$type = 3;
		$per_page = 4;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['result']  = $this->about_us_m->select_limit($type,$per_page,$per_page*($p-1));
		$data['page_html']	  =	page($this->about_us_m->get_all_num($type), $per_page);
		$data['res_topic'] = $this->topic_m->get_all();
		$data['imgs'] = $this->home_pic_m->pic_info(3);
		$data['imgs_num'] = $this->home_pic_m->pic_num(3);
		$data['partners'] = $this->partners_m->get_all();
		$this->load->view('joycenter',$data);
	}
	
	public function single_joy() {
		$type = 3;
		$id = $this->input->post('joy_id');
		$data = $this->about_us_m->get($type,$id);
		echo json_encode($data);
	}
}