<?php
/**
 * 
 * 
 * 
 * 注册登录模型
 * @author lizzyphy
 *
 */
class Register_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
	}
    
    public function user_select($username)
	{
		$this->db->where('name',$username);
		$this->db->from('yj_user');
		$re = $this->db->count_all_results();
		return $re;
	}
	
	public function email_select($email)
	{
		$this->db->where('email',$email);
		$this->db->from('yj_user');
		$re = $this->db->count_all_results();
		return $re;
	}
	
	public function user_add ($data) 
	{
		$data['salt'] = $this->_make_salt();
		$data['password'] = $this->_make_password($data['password'], $data['salt']);
		$this->db->insert('yj_user',$data);
	}
	
	private function _make_password($password, $salt = '')
	{
		return md5(md5($password) . $salt);
	}
	
	private function _make_salt($len = 6)
	{
		$min = pow(10, $len - 1);
		$max = pow(10, $len) - 1;
		return mt_rand($min, $max) . '';
	}
}