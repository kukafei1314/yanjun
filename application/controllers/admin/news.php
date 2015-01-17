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
		$data['news'] = $this->news_m->get_list(); 	
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/news_list',$data);
	}
	
	//删除新闻
	public function del() 
	{
		$id = (int) $this->input->get('id');
		if($id < 1) {
			redirect('d=admin&c=news&m=index');
		}
		$this->news_m->del($id);
		redirect('d=admin&c=news&m=index');
	}
	
	//添加新闻
	public function add() 
	{
		$title = $this->input->post('title');
		//var_dump($title);
		//die;
		$images = $this->input->post('images');
		$content = $this->input->post('ue_content');
		$this->news_m->add($title, $images, $content);
		redirect('d=admin&c=news&m=index', 'refresh');
	}
	
	public function add_v() 
	{
		$data['title'] = '';
		$data['content'] = '';
		$data['images'] = '';
		$data['form_url'] = 'd=admin&c=news&m=add';
		$this->load->view('admin/news_add.php', $data);
	}
	
	//编辑新闻
	public function edit() 
	{
		$id = (int) $this->input->get('id');
		$data['title'] = $this->input->post('title');
		$data['images'] = $this->input->post('images');
		$data['content'] = $this->input->post('ue_content');
		if($data['title'] === FALSE || $data['content'] === FALSE) {
			redirect('d=admin&c=news');
		}
		//var_dump($data);
		$this->news_m->edit($id, $data);
		redirect('d=admin&c=news');
	}

	public function edit_v() 
	{
		$id = (int) $this->input->get('id');
		$news = $this->news_m->get($id);
		if($news === FALSE) {
			redirect('d=admin&c=news');
		}
		$data['title'] = $news['title'];
		$data['content'] = $news['content'];
		$data['form_url'] = 'd=admin&c=news&m=edit&id=' . $id;
		$this->load->view('admin/news_add.php', $data);
	}
	
	//分页
	private function _page_init()
	{
		$this->load->library('pagination');	
		$config['total_rows'] = $this->news_m->get_num();	
		$config['per_page'] = 8;
		$config['base_url'] = 'index.php?d=admin&c=news';
		$config['num_links'] = 10;
		$config['query_string_segment'] = 'p';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['use_page_numbers'] = TRUE;
	
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}