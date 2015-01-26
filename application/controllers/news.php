<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-07
 */
class News extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_m');
		$this->load->model('topic_m');
	}
	
	public function index()
	{
		$per_page = 7;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['title'] = "我喜欢";
		$data['news']  = $this->news_m->get_list($per_page,$per_page*($p-1));
		$data['page_html']	  =	page($this->news_m->get_num(), $per_page);
		$this->load->view('news',$data);
	}
}