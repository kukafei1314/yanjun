<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cases_m');
	}
	
	
	public function index()
	{
		$cases_numb = $this->cases_m->get_num();
		$data['cases'] = $this->cases_m->get_list($cases_numb,'');
		$this->load->view('subpage_case',$data);
	}
}