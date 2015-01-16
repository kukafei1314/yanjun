<?php
/**
 * 
 * 注册登录模型
 * @author lizzyphy
 *
 */
class Login_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
	}
	
	/**
	 * 登录
	 * 
	 * @param string $username
	 * @param string $password
	 * @return integer 
	 *         -1表示用户名不存在
	 *         -2表示密码错误
	 *         正数表示用户UID
	 */
	public function login($username, $password) 
	{
		$this->db->where('name', $username);
		$query = $this->db->get('user');
		if($query->num_rows() < 1) {
			return -1;
		}
		foreach ($query->result() as $user)
		{
			$password = $this->_make_password($password, $user->salt);
			if ($user->password != $password) {
				return -2;
			}
			// 设置登录session
			$data = array(
					'id'		=> $user->id,
					'username'	=> $user->name,
			);
			
			$this->session->set_userdata($data);
			return $user->id;
		}
	}
	
	/**
	 * 退出登录函数
	 */
	public function logout() 
	{
		// 删除登录session
		$data = array(
				'id'		=> '',
				'username'	=> '',
		);
		$this->session->unset_userdata($data);
	}
	
	/**
	 * 检查登录函数
	 */
	public function check_login() 
	{
		// 获取session中的UID
		$id = $this->session->userdata('id');
		
		if ($id > 0) {
			return $id;
		}
		
		return FALSE;
	}
	
	private function _make_password($password, $salt = '')
	{
		return md5(md5($password) . $salt);
	}
}