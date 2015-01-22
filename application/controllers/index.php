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
		$this->load->model('about_us_m');
	}
	
	public function index()
	{
		$data['title'] = "我喜欢";
		$this->load->view('index',$data);
	}
	
	public function news()
	{
		$data['title'] = "我喜欢";
		$this->load->view('news',$data);
	}
	public function joinus()
	{
		$data['title'] = "我喜欢";
		$this->load->view('join_us',$data);
	}
	
	public function test()
	{
		$this->load->view('test');
	}
	
	public function joinus2()
	{
		$this->load->view('join_us_second');
	}
	
	public function subpage_case()
	{
		$this->load->view('subpage_case');
	}
	
	public function case_expand()
	{
		$data['title'] = "我喜欢";
		$this->load->view('case_expand',$data);
	}
	
	
	
	public function map()
	{
		$type = $this->input->get('type',true);
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
		$this->load->view('joycenter', $data);
	}
	public function about_us()
	{
		$data['title'] = "我喜欢";
		$type = 2;
		$data['result'] = $this->about_us_m->get_all($type);
		$this->load->view('about_us', $data);
	}
	public function service()
	{
		$type = 1;
		$data['result'] = $this->about_us_m->get_all($type);
		$this->load->view('service', $data);
	}
}