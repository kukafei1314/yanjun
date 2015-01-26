<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：加入我们功能实现
 * 作者：Lsen
 * 日期：2015.1.25
 */

class Join_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('join_us_m');
    }
    
    public function index()
    {
         $this->load->view('join_us_second');
    }
	
	public function department()
    {    
		$did = (int) $this->input->get('did');
		$data['employ'] = $this->join_us_m->get_department_employee($did);
		$data['job'] = $this->join_us_m->get_department_job($did);
		$data['depart'] = $this->join_us_m->get_department($did);
		$data['topic'] = $this->join_us_m->get_topic();
		//var_dump($data['depart']);
		//die;
        $this->load->view('join_us',$data);      
    }
	
    public function employee()
    {
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['employees'] = $this->join_us_m->get_all_employee();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_list',$data);
    }
   
}