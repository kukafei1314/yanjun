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
	}
	
	public function index()
	{
		$this->load->view('index');
	}
	public function news()
	{
		$this->load->view('news');
	}
	public function subpage_case()
	{
		$this->load->view('subpage_case');
	}
	public function case_expand()
	{
		$this->load->view('case_expand');
	}
}