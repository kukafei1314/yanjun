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
		$per_page = 1;
	    if(isset($_GET['per_page']) && $_GET['per_page'] != ''){
	        $start_page = ((int)$_GET['per_page'] - 1) * 10;
	    } else {
	        $start_page = ($per_page - 1) * 10;
	    }
	    $count = $this->news_m->get_num();
	    $this->news_m->pageConfig($count);
		$data['news'] = $this->news_m->get_list($per_page); 	
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/news_list',$data);
	}
	
	//删除新闻
	public function del() 
	{
		$id = (int) $this->input->get('id');
		if($id < 1) {
			redirect('admin/news');
		}
		$this->news_m->del($id);
		redirect('admin/news');
	}
	
	//添加新闻
	public function add() 
	{
		$title = $this->input->post('title');
		$images = $this->input->post('images');
		$content = $this->input->post('ue_content');
		$this->news_m->add($title, $images, $content);
		redirect('admin/news');
	}
	
	public function add_v() 
	{
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
		$id = (int) $this->input->get('id');
		$data['title'] = $this->input->post('title');
		$data['images'] = $this->input->post('images');
		$data['content'] = $this->input->post('ue_content');
		if($data['title'] === FALSE || $data['content'] === FALSE) {
			redirect('admin/news');
		}
		$this->news_m->edit($id, $data);
		redirect('admin/news');
	}

	public function edit_v() 
	{
		$data['username'] = $this->session->userdata('username');
		$id = (int) $this->input->get('id');
		$news = $this->news_m->get($id);
		if($news === FALSE) {
			redirect('admin/news');
		}
		$data['title'] = $news['title'];
		$data['content'] = $news['content'];
		$data['form_url'] = 'admin/news/edit?id=' . $id;
		$this->load->view('admin/news_add.php', $data);
	}
}