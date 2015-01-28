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
        $this->load->model(array('join_us_m','home_pic_m'));
    }
    
    public function index()
    {
		$data['imgs'] = $this->home_pic_m->pic_info(5);
		$data['depart'] = $this->join_us_m->get_department(17);
        $this->load->view('join_us_second',$data);
    }
	
	public function department()
    {    
		$did = (int) $this->input->get('did');
		$per_page_job = 8;		//招聘职位
		$per_page = 5;			//员工
		$p = (int) page_cur();	// 获取当前页码
		
		$data['p'] = $p;
		$data['employ'] = $this->join_us_m->get_department_employee($did,$per_page,$per_page*($p-1));
		$data['job'] = $this->join_us_m->get_department_job($did,$per_page_job,$per_page_job*($p-1));
		if($this->join_us_m->get_job_num()/$per_page_job > $this->join_us_m->get_num()/$per_page) {
			$num = $this->join_us_m->get_job_num();
			$data['page_html']	 =	page($num,$per_page_job);
		} else {
			$num = $this->join_us_m->get_num();
			$data['page_html']	 =	page($num,$per_page);
		}
		$data['depart'] = $this->join_us_m->get_department($did);
		$data['topic'] = $this->join_us_m->get_topic();
		$data['imgs'] = $this->home_pic_m->pic_info(5);
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