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
		$query = $this->db->get('yj_user');
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
	
	public function change_pw($id,$old_password,$new_password)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('yj_user');
		if($query->num_rows() < 1) {
			return false;
		}
		$row = $query->row_array();
		$password = $this->_make_password($old_password, $row['salt']);
		if ($password != $row['password']) {
			return false;
		} else {
			$data['salt'] = $this->_make_salt();
			$data['password'] = $this->_make_password($new_password, $data['salt']);
			$this->db->where('id', $id);
			$this->db->update('yj_user',$data);
			return true;
		}
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