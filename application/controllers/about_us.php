<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('about_us_m','topic_m','news_m','home_pic_m'));
	}
	
	
	public function index()
	{	
		$type = 2;
		$per_page_new = 7;
		$per_page_w = 3;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['news']  = $this->news_m->get_list($per_page_new,$per_page_new*($p-1));
		$data['result']  = $this->about_us_m->select_limit($type,$per_page_w,$per_page_w*($p-1));
		if($this->about_us_m->get_all_num($type)/$per_page_w < $this->news_m->get_num()/$per_page_new) {
			$data['page_html'] = page($this->news_m->get_num(), $per_page_new);
		}else $data['page_html'] = page($this->about_us_m->get_all_num($type), $per_page_w);
		$data['title'] = "我喜欢";
		$data['imgs'] = $this->home_pic_m->pic_info(6);
		//$data['result'] = $this->about_us_m->get_all($type);
		$data['res_topic'] = $this->topic_m->get_all();
		$this->load->view('about_us',$data);
	}
	
	public function to_news()
	{
		$id = $this->input->get('id');
		$per_page = 7;
		$p = $this->input->get('p')? $this->input->get('p'):1;	// 获取当前页码
		$data['p'] = $p;
		$data['imgs'] = $this->home_pic_m->pic_info(6);
		$data['news'] = $this->news_m->get_list($per_page,$per_page*($p-1));
		$data['page_html'] = page($this->news_m->get_num(), $per_page);
		
		$res = $this->news_m->get($id);
		$data['title'] = $res['title'];
		$data['content'] = $res['content'];
		$data['test'] = true;
		$this->load->view('news',$data);
	}
}