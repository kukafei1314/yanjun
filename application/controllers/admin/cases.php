<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台案例管理控制器
 * 
 * @author lyb
 * @version 1.0 2015-01-19
 */
class Cases extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('login_m');
		$this->load->library('uploader_ue');

		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}		
		$this->load->model('cases_m');
		$this->load->helper('form');
	}
	
		//获取表格数据，显示案例列表
	public function index()
	{
		$per_page = 10;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['cases'] = $this->cases_m->get_list($per_page,$per_page*($p-1)); 
		$data['page_html']	  =	page($this->cases_m->get_num(), $per_page);
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/cases_list',$data);
	}
	
		//删除新闻
	public function del() 
	{
		$p = (int) page_cur();	// 获取当前页码
		$id = (int) $this->input->get('id');
		if($id < 1) {
			redirect('admin/cases');
		}
		$this->cases_m->del($id);
		redirect('admin/cases?p='.$p);  //!!!!!!!!!!!!!!!!!!!!!!!!!!
	}
	
		//添加新闻
	public function add() 
	{
		$name = $this->input->post('name');
		$project = $this->input->post('project');
		$config = array(
	    			"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
	    			"maxSize" => 50000000 , //单位KB
	    			"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
	    	);
		//添加图片
    	$pic = new Uploader_ue( "pic" , $config);
    	$info = $pic->getFileInfo();
    	if($info['state'] == 'SUCCESS') {
    		$images = $info['url'];
    	} else {
    		$images = '';
    	}
		//添加logo
		$logopic = new Uploader_ue( "logopic" , $config);
    	$logoinfo = $logopic->getFileInfo();
    	if($logoinfo['state'] == 'SUCCESS') {
    		$logo = $logoinfo['url'];
    	} else {
    		$logo = '';
    	}
		
		$content = $this->input->post('ue_content');
		$this->cases_m->add($name, $project, $images, $logo, $content);
		redirect('admin/cases');
	}
	
	public function add_v() 
	{
		$data['username'] = $this->session->userdata('username');
		$data['name'] = '';
		$data['project'] = '';
		$data['content'] = '';
		$data['images'] = '';
		$data['logo'] = '';
		$data['form_url'] = 'admin/cases/add';
		$this->load->view('admin/cases_add', $data);
	}
	
	//编辑新闻
	public function edit() 
	{
		$p = (int) page_cur();	// 获取当前页码
		$id = (int) $this->input->get('id');
		$data['name'] = $this->input->post('name');
		$data['project'] = $this->input->post('project');
		$config = array(
    			"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
    			"maxSize" => 50000000 , //单位KB
    			"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
	    );
		//添加图片
    	$pic = new Uploader_ue( "pic" , $config);
    	$info = $pic->getFileInfo();
    	if($info['state'] == 'SUCCESS') {
    		$data['images'] = $info['url'];
    	} else {
    		$data['images'] = '';
    	}
		sleep(1);
		//添加logo
		$logopic = new Uploader_ue( "logopic" , $config);
    	$logoinfo = $logopic->getFileInfo();
    	if($logoinfo['state'] == 'SUCCESS') {
    		$data['logo'] = $logoinfo['url'];
    	} else {
    		$data['logo'] = '';
    	}
		
		$data['content'] = $this->input->post('ue_content');
		if($data['name'] === FALSE || $data['content'] === FALSE) {
			redirect('admin/cases');
		}
		$this->cases_m->edit($id, $data);
		redirect('admin/cases?p='.$p);
	}

	public function edit_v() 
	{
		$data['p'] = (int) page_cur();	// 获取当前页码
		$data['username'] = $this->session->userdata('username');
		$data['id'] = (int) $this->input->get('id');
		$cases = $this->cases_m->get($data['id']);
		if($cases === FALSE) {
			redirect('admin/cases');
		}
		$data['name'] = $cases['name'];
		$data['project'] = $cases['project'];
		$data['content'] = $cases['content'];
		$data['images'] = $cases['images'];
		$data['logo'] = $cases['logo'];
		$data['form_url'] = 'admin/cases/edit?id=' . $data['id'].'&p='.$data['p'];
		$this->load->view('admin/cases_add.php', $data);
	}
}