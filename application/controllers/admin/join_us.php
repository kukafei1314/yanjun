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
        if($type == 'employee') {
            $config = array(
                "pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
                "maxSize" => 50000000 , //单位KB
                "allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
            );
            $ue_pic = new Uploader_ue( "pic" , $config);
            $pic_info = $ue_pic->getFileInfo();
            if($pic_info['state'] == 'SUCCESS') {
                $pic = $pic_info['url'];
            } else {
                $pic = '';
            }
            $ue_sign = new Uploader_ue( "sign" , $config);
            $sign_info = $ue_sign->getFileInfo();
            if($sign_info['state'] == 'SUCCESS') {
                $sign = $sign_info['url'];
            } else {
                $sign = '';
            }
            $data['employee_name'] = $_POST['employee_name'];
            $data['employee_id'] = $_POST['employee_id'];
            $data['did'] = $_POST['employee_department'];
            $data['pic'] = $pic;
            $data['signature'] = $sign;
            $data['motto'] = $_POST['ue_content'];
            if($this->join_us_m->add_employee($data) == TRUE) {
                redirect('admin/join_us/employee');
            }
        } else if($type == 'job') {
            redirect('admin/join_us/employee');
        }  
    }
    public function employee()
    {
        $data['departments'] = $this->join_us_m->get_department();
        $data['employees'] = $this->join_us_m->get_employee();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_list',$data);
    }
    
    public function add_employee()
    {
        $data['form_url'] = 'admin/join_us/add?type=employee';
        $data['departments'] = $this->join_us_m->get_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_add',$data);
    }
    
    public function job()
    {
        
    }
}