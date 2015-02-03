<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases_expand extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cases_m');
		$this->load->model('partners_m');
	}
	
	
	public function index()
	{	
		$per_page = 10;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$id = $this->input->get('id');
		$case = $this->cases_m->get_id($id);
		$data['case'] = $case;
		$data['cases'] = $this->cases_m->get_list_rand($per_page,($p-1)*$per_page);
		$data['page_html'] = page($this->cases_m->get_num(),$per_page);
		$data['partners'] = $this->partners_m->get_all();
		$this->load->view('case_expand',$data);
	}
	public function single_cases()
	{
		$id = $this->input->post('case_id');
		$case  = $this->cases_m->get($id);
		$cases = $this->cases_m->get_list_rand(10,'');
		echo json_encode($case);
	}
}