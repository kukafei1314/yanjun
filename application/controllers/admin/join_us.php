<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：加入我们功能实现
 * 作者：lzz
 * 日期：2015.1.21
 */

class Join_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('join_us_m');
    }
    
    public function add()
    {
        $type = $_GET['type'];
        $p = (int) page_cur();
        if(isset($_GET['id'])){
            $data['id'] = $_GET['id'];
        } else {
            $data['id'] ='';
        }
        if($type == 'employee') {
            if(isset($_GET['id'])) {
                $employee_old = $this->join_us_m->get_employee($data['id']);
            }
            $config = array(
                "pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
                "maxSize" => 50000000 , //单位KB
                "allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
            );
            $ue_pic = new Uploader_ue( "pic" , $config);
            $pic_info = $ue_pic->getFileInfo();
            if($pic_info['state'] == 'SUCCESS') {
                $pic = $pic_info['url'];
            } else if(isset($_GET['id'])) {
                $pic = $employee_old['pic'];
            } else {
                $pic='';
            }
            sleep(1);
            $ue_sign = new Uploader_ue( "sign" , $config);
            $sign_info = $ue_sign->getFileInfo();
            if($sign_info['state'] == 'SUCCESS') {
                $sign = $sign_info['url'];
            } else if(isset($_GET['id'])){
                $sign = $employee_old['signature'];
            } else {
                $sign = '';
            }
                
            $data['employee_name'] = $_POST['employee_name'];
            $data['employee_id'] = $_POST['employee_id'];
            $data['did'] = $_POST['employee_department'];
            $data['pic'] = $pic;
            $data['signature'] = $sign;
            $data['motto']= $_POST['ue_content'];
            if($this->join_us_m->add_employee($data) == TRUE) {
                redirect('admin/join_us/employee?p='.$p);
            }
        } else if($type == 'job') {
            $data['did'] = $_POST['did'];
            $data['job_name'] = $_POST['job_name'];
            $data['add_time'] = time();
            $data['content']= $_POST['ue_content'];          
            $this->join_us_m->add_job($data);
            redirect('admin/join_us/job?p='.$p);
        }  
    }
    public function employee()
    {
		$per_page = 10;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
        //$data['departments'] = $this->join_us_m->get_all_department();
        $data['employees'] = $this->join_us_m->get_list($per_page,$per_page*($p-1));
		foreach ($data['employees'] as &$employee){
			$department = $this->join_us_m->get_department_name($employee['did']);
			$employee['position'] = $department;
		}
		$data['page_html']	  =	page_r($this->join_us_m->get_num('yj_employee'), $per_page);
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_list',$data);
    }
    
    public function employee_detail()
    {
    	$data['p'] = (int)page_cur();
    	$id = $_GET['id'];
        $data['employee'] = $this->join_us_m->get_employee($id);
        $data['department'] = $this->join_us_m->get_department_name($data['employee']['did']);
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_detail',$data);
    }
    
    public function add_employee()
    {
    	$data['p'] = (int)page_cur();
        $data['form_url'] = 'admin/join_us/add?type=employee';
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_add',$data);
    }
    
    public function edit_employee()
    {
    	$data['p'] = (int)page_cur();
        $id = $_GET['id'];
        $data['form_url'] = "admin/join_us/add?type=employee&id=$id";
        $data['employee'] = $this->join_us_m->get_employee($id);
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_edit',$data);
    }
    
    public function delete_employee()
    {
    	$p = (int)page_cur();
        $id = $_GET['id'];
        $this->join_us_m->delete_employee($id);
        redirect('admin/join_us/employee?p='.$p);
    }
    
    public function job()
    {
    	$per_page = 10;
    	$p = (int) page_cur();	// 获取当前页码
    	$data['p'] = $p;
        $data['jobs'] = $this->join_us_m->get_job_list($per_page,$per_page*($p-1));
        foreach ($data['jobs'] as &$job){
        	$department = $this->join_us_m->get_department_name($job['did']);
        	$job['department'] = $department;
        }
        //var_dump($data['jobs']);
        $data['page_html']	  =	page_r($this->join_us_m->get_num('yj_job'), $per_page);
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/job_list',$data);
    }
    
    public function detail_job()
    {
    	$data['p'] = (int)page_cur();
    	$id = $this->input->get('id');
    	$data['job'] = $this->join_us_m->get_job($id);
    	$data['department'] = $this->join_us_m->get_department_name($data['job']['did']);
    	$data['username'] = $this->session->userdata('username');
    	$this->load->view('admin/job_detail',$data);
    }
    
    public function add_job()
    {
    	$data['p'] = (int) page_cur();	// 获取当前页码
        $data['form_url'] = 'admin/join_us/add?type=job&p='.$data['p'];
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/job_add',$data);
    }
    public function edit_job()
    {
    	$data['p'] = (int) page_cur();	// 获取当前页码
        $id = $_GET['id'];
        $data['form_url'] = "admin/join_us/add?type=job&id=$id&p=".$data['p'];
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['job'] = $this->join_us_m->get_job($id);
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/job_add',$data);
    }
    
    public function delete_job()
    {
    	$p = (int)page_cur();
        $id = $_GET['id'];
        $this->join_us_m->delete_job($id);
        redirect('admin/join_us/job?p='.$p);
    }
	
	public function set_order()
	{
		$id = $this->input->post('pid');
		$order = $this->input->post('order');
		$type = $this->input->get('type');
		$this->join_us_m->upadate_order($id,$order,$type);
		if($type=='yj_employee') {
			redirect('admin/join_us/employee');
		} else {
			redirect('admin/join_us/job');
		}
	}
	
	public function question_join() {
		$data['username'] = $this->session->userdata('username');
		$data['question'] = $this->join_us_m->get_all_question();
		$this->load->view('admin/join_question',$data);
	}
	
	public function question_join_edit() {
		$id = $this->input->get('id');
		$data = $this->join_us_m->get_question($id);
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/join_question_edit',$data);
	}
	
	public function question_join_edit_v() {
		$arr['id'] = $this->input->get('id');
		$arr['title'] = $this->input->post('title');
		$arr['content'] = $this->input->post('content');
		$result = $this->join_us_m->question_edit($arr);
		if($result){
			redirect('admin/join_us/question_join');
		}
	}
}