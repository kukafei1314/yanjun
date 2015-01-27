<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-07
 */
class Index extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('about_us_m','topic_m','news_m','cases_m','home_pic_m'));
	}
	
	public function index()
	{
		$per_page_news = 6;		//新闻
		$per_page = 3;			//案例
		$p = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$data['news']  = $this->news_m->get_list($per_page_news,$per_page_news*($p-1));
		$data['cases']  = $this->cases_m->get_list($per_page,$per_page*($p-1));
		if($this->news_m->get_num()/$per_page_news > $this->cases_m->get_num()/$per_page) {
			$num = $this->news_m->get_num();
			$data['page_html']	 =	page($num,$per_page_news);
		} else {
			$num = $this->cases_m->get_num();
			$data['page_html']	 =	page($num,$per_page);
		}
		$data['imgs'] = $this->home_pic_m->pic_info(1);
		$this->load->view('index',$data);
	}
	
	public function joinus2()
	{
		$this->load->view('join_us_second');
	}
	
	public function subpage_case()
	{
		$this->load->view('subpage_case');
	}
	
	public function map()
	{
		$type = $this->input->get('type',true);
		$data['imgs'] = $this->home_pic_m->pic_info(2);
		if($type == 1) {
			$this->load->view('map_shi');
		} else {
			$this->load->view('map_bj');
		}
		
	}
	public function up()
	{
		$this->load->view('up');
	}
	public function subBusiness()
	{
		$this->load->view('subBusiness');
	}
	public function busi_problem()
	{
		$this->load->view('busi_problem');
	}
	public function joycenter()
	{
		$type = 3;
		$data['result'] = $this->about_us_m->get_all($type);
		$data['res_topic'] = $this->topic_m->get_all();
		$this->load->view('joycenter', $data);
	}
}