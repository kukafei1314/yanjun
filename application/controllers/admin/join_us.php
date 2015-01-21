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
    
    public function employee()
    {
        $data['department'] = $this->join_us_m->get_department();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('admin/employee_list',$data);
    }
    
    public function job()
    {
        
    }
}