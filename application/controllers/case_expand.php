<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases_expand extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cases_m');
	}
	
	
	public function index()
	{	
		$id = $this->input->get('id');
		$case = $this->cases_m->get_id($id);
		$data['case'] = $case;
		$this->load->view('case_expand',$data);
	}
}