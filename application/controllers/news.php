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
		$this->load->model(array('news_m','home_pic_m','topic_m'));
		$this->load->model('partners_m');
	}
	
	public function index()
	{
		$per_page = 7;
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['news']  = $this->news_m->get_list($per_page,$per_page*($p-1));
		$data['page_html']	  =	page($this->news_m->get_num(), $per_page);
		$data['imgs'] = $this->home_pic_m->pic_info(7);
		$data['imgs_num'] = $this->home_pic_m->pic_num(7);
		$data['partners'] = $this->partners_m->get_all();
		$this->load->view('news',$data);
	}
	
	public function single_news()
	{
		$id = $this->input->post('new_id');
		$news  = $this->news_m->get($id);
		echo json_encode($news);
	}
}