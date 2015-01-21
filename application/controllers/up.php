<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 首页控制器
 * 
 * @author lizzyphy
 * @version 1.0 2015-01-07
 */
class Up extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function show() {
		if(!file_exists($_FILES['upload_file']['name'])) {
			move_uploaded_file($_FILES['upload_file']['tmp_name'],iconv('utf-8','gb2312',$_FILES['upload_file']['name']));
			echo "<textarea><img src='{$_FILES['upload_file']['name']}'/></textarea>";
		}	
	}
}