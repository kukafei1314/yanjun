<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* @大图管理
 * @author mm
 */
class Home_pic_m extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
       $this->load->database();
       $this->load->library('pagination');
   }
   
   public function home_pic_list()
   {
       $sql = "SELECT type FROM `yj_big_image` ORDER BY type";
       $query = $this->db->query($sql);
	   foreach($query->result_array() as $row) {
		   $type = $row['type'];
		   $result[$type] = $this->pic_info($type);
	   }
       return $result;
   }
   
   public function update_pic($pid,$pic)
   {
   		$this->db->where('id',$pid);
   		$this->db->update('yj_big_image',$pic);
   		return TRUE;
   }
   
   public function add_pic($pic)
   {
   		$this->db->insert('yj_big_image',$pic);
   		return TRUE;
   }
   
   public function del_pic($pid) 
   {
	   $this->db->where('id',$pid);
	   $this->db->delete('yj_big_image');
	   return TRUE;
   }
   public function type_name($type)
   {
	   $this->db->where('tid',$type);
	   $this->db->select('name');
	   $query = $this->db->get('yj_image_type');
	   foreach($query->result_array() as $row) {
		   $result = $row['name'];
	   }
	   return $result;
   }
   
   public function get_url($pid)
   {
	   $this->db->where('id',$pid);
	   $this->db->select('path');
	   $query = $this->db->get('yj_big_image');
	   foreach($query->result_array() as $row) {
		   $result = $row['path'];
	   }
	   return $result;
   }
   
   public function pic_info($type)
   {
	   $this->db->where('type',$type);
	   $this->db->order_by('order');
	   $query = $this->db->get('yj_big_image');
	   $i = 0;
	   foreach($query->result_array() as $row) {
		   $result[$i]['id'] = $row['id'];
		   $result[$i]['type'] = $this->type_name($type);
		   $result[$i]['path'] = $row['path'];
		   $result[$i]['order'] = $row['order'];
		   $result[$i]['tid']  = $type;
		   $i++;
	   }
	   return $result;
   }
   
    
   public function pic_num($type)
   {
	   $this->db->where('type',$type);
	   $result = $this->db->count_all_results('yj_big_image');
	   return $result;
   }
}