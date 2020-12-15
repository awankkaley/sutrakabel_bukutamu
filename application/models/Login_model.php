<?php
class Login_model extends CI_Model{
	
	function insert($data){
		$this->db->insert('tbl_login', $data);
		return $this->db->insert_id(); 
	}

	function update($admin, $id_admin){
      $this->db->where('id_admin', $id_admin);
      $query = $this->db->update('tbl_admin', $admin);
      if($query){
          return true;
      }else{
          return false;
      }
    }

	function auth($username,$password){
		$query=$this->db->query("SELECT * FROM tbl_admin WHERE password=MD5('$password') AND (email='$username' OR username='$username') LIMIT 1");
		return $query;
	}
}