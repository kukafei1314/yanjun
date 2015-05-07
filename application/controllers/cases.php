<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cases_m');
		$this->load->model('partners_m');
		$this->load->model('type_m');
	}
	
	
	public function index()
	{
		$tid = $this->input->get('tid');
		$per_page = 40;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['count'] = 0;
		$cases_numb = $this->cases_m->get_num($tid);
		$data['cases']  = $this->cases_m->get_list($per_page,$per_page*($p-1),$tid);
		$data['page_html']	 =	page($cases_numb, $per_page);
		$data['partners'] = $this->partners_m->get_all();
		$data['types'] = $this->type_m->get_all(3);
		$this->load->view('subpage_case',$data);
	}
	
}