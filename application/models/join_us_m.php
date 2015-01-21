<?php
/**
 * 功能：后台-加入我们 -模型 
 * 相关子模块：部门介绍、员工介绍、招聘职位
 * 涉及表格：yj_department_type、yj_employee、yj_job
 * @notice 部门介绍在类别管理里编辑，此处无需编辑，员工和招聘职位只需要和部门关联，每个部门的不同。
 * @author lizzyphy
 * @time 2015.01.16
 *
 */
class Join_us_m extends CI_Model {
	function __construct() 
	{	
		parent::__construct();
		$this->load->database();
	}
	
	public function get_department()
	{
	    $query = $this->db->get('yj_department_type');
	    return $query->result_array();
	}
	
	public function get_employee()
	{  
	    $this->db->select('did','pic','signature','employee_name','employee_id');
	    $query = $this->db->get('yj_employee');
	    return $query->result_array();
	}
	
}