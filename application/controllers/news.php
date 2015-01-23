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
		$data['title'] = "我喜欢";
		$this->load->view('index',$data);
	}
}