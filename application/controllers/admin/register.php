<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台注册控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-11
 */
class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_m');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('admin/register');
	}
	
	public function zhuce()
	{
		$username =  $this->input->post('username');
		$email = $this->input->post('email');
		$password =  $this->input->post('password');
		
		//sumbission data
		//$date = date('d/m/Y');
		//$time = date('H:i:s');
		
		//form data
		//$this->load->library('email');
		//$this->email->from('lizzyphy@163.com');
		//$this->email->to($email); 
		//$emailbody = "<p><strong>用户名: </strong> {$username} </p>
					//  <p><strong>邮箱地址: </strong> {$email} </p>>
                    //  {$date} at {$time}</p>";
		//$this->email->subject('用户注册成功-晏钧设计后台管理系统');
		//$this->email->message($emailbody); 

		//$this->email->send();

		$in_data = array(
               'name' => $username ,
               'password' => $password ,			  
			   'email' => $email ,
		       'salt' => ''
         );	
		$this->register_m->user_add($in_data);
		redirect('admin/index');		
	}
	
	public function check_username()
	{
		$username = $this->input->post('name');
		$rst = $this->register_m->user_select($username);
		if($rst > 0)
		{
			echo json_encode('false');
		}
		else
		{
			echo json_encode('true');
		}	
	}
	
	public function check_email()
	{
		$email = $this->input->post('email');
		$rst = $this->register_m->email_select($email);
		if($rst > 0)
		{
			echo json_encode('false');
		}
		else
		{
			echo json_encode('true');
		}	
	}
}