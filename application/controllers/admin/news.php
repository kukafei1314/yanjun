<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 后台新闻管理控制器
 * 
 * @author Lsen
 * @version 1.0 2015-01-16
 */
class News extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('login_m');
		$this->load->library('uploader_ue');
		$this->load->library('session');
		
		// 先验证登录
		$id = $this->login_m->check_login();
		if ($id < 0 || $id == FALSE) {
			redirect('admin/login');
		}
		$this->load->model('news_m');
		$this->load->helper('form');
	}
	
	//获取表格数据，显示新闻列表
	public function index()
	{
		if($_POST || $this->input->get('test') == 1) {
			if($_POST) {
				$msg = array('str' => '');
				$this->session->unset_userdata($msg);
				$msg = array('str' => $this->input->post('search'));
				$this->session->set_userdata($msg);
			}
			$str = $this->session->userdata('str');
			$per_page = 10; 
			$p = (int) page_cur();	// 获取当前页码
			$data['p'] = $p;
			$data['news'] = $this->news_m->search_list($str,$per_page,$per_page*($p-1));
			$data['page_html']	  =	page_r($this->news_m->search_num($str), $per_page);
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/news_list',$data);
			
		}else{
			$per_page = 10;
			$p = (int) page_cur();	// 获取当前页码
			$data['p'] = $p;
			$data['news'] = $this->news_m->get_list($per_page,$per_page*($p-1)); 
			$data['page_html']	  =	page_r($this->news_m->get_num(), $per_page);
			$data['username'] = $this->session->userdata('username');
			$this->load->view('admin/news_list',$data);
		}
	}
	
	//新闻详情
	public function news_detail()
	{
		$data['p'] = (int) page_cur();	// 获取当前页码
		$data['username'] = $this->session->userdata('username');
		$data['id'] = (int) $this->input->get('id');
		$data['news'] = $this->news_m->get($data['id']);
		if($data['news'] === FALSE) {
			redirect('admin/news');
		}
		$this->load->view('admin/news_detail.php', $data);
	}
	
	//删除新闻
	public function del() 
	{
		$p = (int) page_cur();	// 获取当前页码
		$id = (int) $this->input->get('id');
		if($id < 1) {
			redirect('admin/news');
		}
		$this->news_m->del($id);
		redirect('admin/news?p='.$p);
	}
	
	//添加新闻
	public function add() 
	{   
		$title = $this->input->post('title');
		$config = array(
	    			"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
	    			"maxSize" => 50000000 , //单位KB
	    			"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
	    	);
    	$pic = new Uploader_ue( "pic" , $config);
    	$info = $pic->getFileInfo();
    	if($info['state'] == 'SUCCESS') {
    		$images = $info['url'];
    	} else {
    		$images = '';
    	}
		$content = $this->input->post('ue_content');
		$this->news_m->add($title, $images, $content);
		redirect('admin/news');
	}
	
	public function add_v() 
	{   
	    $data['p'] = (int) page_cur();	// 获取当前页码
		$data['username'] = $this->session->userdata('username');
		$data['title'] = '';
		$data['content'] = '';
		$data['images'] = '';
		$data['form_url'] = 'admin/news/add';
		$this->load->view('admin/news_add', $data);
	}
	
	//编辑新闻
	public function edit() 
	{
		$p = (int) page_cur();	// 获取当前页码
		$id = (int) $this->input->get('id');
		$data['title'] = $this->input->post('title');
		$config = array(
    			"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
    			"maxSize" => 50000000 , //单位KB
    			"allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp"  )
	    );
    	$pic = new Uploader_ue( "pic" , $config);
    	$info = $pic->getFileInfo();
    	if($info['state'] == 'SUCCESS') {
    		$data['images'] = $info['url'];
    	} else {
    		$data['images'] = '';
    	}
		$data['content'] = $this->input->post('ue_content');
		if($data['title'] === FALSE) {
			redirect('admin/news');
		}
		$this->news_m->edit($id, $data);
		redirect('admin/news?p='.$p);
	}

	public function edit_v() 
	{
		$data['p'] = (int) page_cur();	// 获取当前页码
		$data['username'] = $this->session->userdata('username');
		$data['id'] = (int) $this->input->get('id');
		$news = $this->news_m->get($data['id']);
		if($news === FALSE) {
			redirect('admin/news');
		}
		$data['title'] = $news['title'];
		$data['content'] = $news['content'];
		$data['images'] = $news['images'];
		$data['form_url'] = 'admin/news/edit?id=' . $data['id'].'&p='.$data['p'];
		$this->load->view('admin/news_add.php', $data);
	}
	
	public function set_order()
	{
		$id = $this->input->post('pid');
		$order = $this->input->post('order');
		$this->news_m->upadate_order($id,$order);
		redirect('admin/news');
	}
}