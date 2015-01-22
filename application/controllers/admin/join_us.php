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
            $ue_content= $_POST['ue_content'];
            $preg = "/<p.*>(.*)<\/p>/";//正则
            preg_match($preg,$ue_content,$store);
            $data['motto'] = $store[1];
            if($this->join_us_m->add_employee($data) == TRUE) {
                redirect('admin/join_us/employee');
            }
        } else if($type == 'job') {
            $data['did'] = $_POST['did'];
            $data['job_name'] = $_POST['job_name'];
            $data['add_time'] = time();
            $ue_content= $_POST['ue_content'];
            $preg = "/<p.*>(.*)<\/p>/";//正则
            preg_match($preg,$ue_content,$store);
            $data['content'] = $store[1]; 
            
            $this->join_us_m->add_job($data);
            redirect('admin/join_us/job');
        }  
    }
    public function employee()
    {
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['employees'] = $this->join_us_m->get_all_employee();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_list',$data);
    }
    
    public function add_employee()
    {
        $data['form_url'] = 'admin/join_us/add?type=employee';
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_add',$data);
    }
    
    public function edit_employee()
    {
        $id = $_GET['id'];
        $data['form_url'] = "admin/join_us/add?type=employee&id=$id";
        $data['employee'] = $this->join_us_m->get_employee($id);
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_edit',$data);
    }
    
    public function delete_employee()
    {
        $id = $_GET['id'];
        $this->join_us_m->delete_employee($id);
        redirect('admin/join_us/employee');
    }
    
    public function job()
    {
        $data['jobs'] = $this->join_us_m->get_all_job();
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/job_list',$data);
    }
    public function add_job()
    {
        $data['form_url'] = 'admin/join_us/add?type=job';
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/job_add',$data);
    }
    public function edit_job()
    {
        $id = $_GET['id'];
        $data['form_url'] = "admin/join_us/add?type=job&id=$id";
        $data['departments'] = $this->join_us_m->get_all_department();
        $data['job'] = $this->join_us_m->get_job($id);
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/job_edit',$data);
    }
    
    public function delete_job()
    {
        $id = $_GET['id'];
        $this->join_us_m->delete_job($id);
        redirect('admin/join_us/job');
    }
}