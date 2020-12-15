<?php
class Main_model extends CI_Model{
  function select_bukutamu($inputNama,$inputJammasuk,$tanggal){
    $query=$this->db->query("SELECT * FROM tbl_bukutamu WHERE nama='$inputNama' AND jam_masuk='$inputJammasuk' AND tanggal='$tanggal'");
    return $query;
  }

  //awal admin
    function get_all_bukutamu()
    {
      $query = $this->db->select("*")
               ->from('tbl_bukutamu')
               ->order_by('tanggal', 'ASC')
               ->get();
      return $query->result();
    }

    function get_bukutamu_by_id($id_bukutamu)
    {
      $query = $this->db->select("*")
               ->from('tbl_bukutamu')
               ->where('id_bukutamu', $id_bukutamu)
               ->order_by('id_bukutamu', 'ASC')
               ->get();
      return $query->result();
    }

    function insert_bukutamu($bukutamu){
      $query = $this->db->insert('tbl_bukutamu', $bukutamu);
      if($query){
        return true;
      }else{
        return false;
      }
    }

    function ubah_bukutamu($id_bukutamu)
    {
        $query = $this->db->where("id_bukutamu", $id_bukutamu)
                ->get("tbl_bukutamu");
        return $query->result();        
    }


    function update_bukutamu($bukutamu, $id_bukutamu){
      $this->db->where('id_bukutamu', $id_bukutamu);
      $query = $this->db->update('tbl_bukutamu', $bukutamu);
      if($query){
          return true;
      }else{
          return false;
      }
    }

    function update_jamkeluar($bukutamu, $id_bukutamu){
      $this->db->where('id_bukutamu', $id_bukutamu);
      $query = $this->db->update('tbl_bukutamu', $bukutamu);
      if($query){
          return true;
      }else{
          return false;
      }
    }

    function hapus_bukutamu($id_bukutamu)
    {
      $this->db->where('id_bukutamu', $id_bukutamu);
      $this->db->delete('tbl_bukutamu');
    }

    function row_bukutamu(){
      $query=$this->db->query("SELECT * FROM tbl_bukutamu");
      return $query->num_rows();
    }

    function get_cek_bulan($bulan){
      $query=$this->db->query("SELECT * FROM tbl_bukutamu WHERE MONTH(tanggal)='$bulan'");
      return $query->num_rows();
    }

    function get_cetak($bulan){
      $query=$this->db->query("SELECT * FROM tbl_bukutamu WHERE MONTH(tanggal)='$bulan'");
      return $query->result();
    }

    function get_bulan(){
      $query=$this->db->query("SELECT DISTINCT(tanggal) FROM tbl_bukutamu GROUP BY MONTH(tanggal)");
      return $query->result();
    }

    function get_grafik_01(){
      $query=$this->db->query("SELECT COUNT(nama) as total_01 FROM tbl_bukutamu WHERE MONTH(tanggal)='01'");
      return $query->result();
    }

    function get_grafik_02(){
      $query=$this->db->query("SELECT COUNT(nama) as total_02 FROM tbl_bukutamu WHERE MONTH(tanggal)='02'");
      return $query->result();
    }

    function get_grafik_03(){
      $query=$this->db->query("SELECT COUNT(nama) as total_03 FROM tbl_bukutamu WHERE MONTH(tanggal)='03'");
      return $query->result();
    }

    function get_grafik_04(){
      $query=$this->db->query("SELECT COUNT(nama) as total_04 FROM tbl_bukutamu WHERE MONTH(tanggal)='04'");
      return $query->result();
    }

    function get_grafik_05(){
      $query=$this->db->query("SELECT COUNT(nama) as total_05 FROM tbl_bukutamu WHERE MONTH(tanggal)='05'");
      return $query->result();
    }

    function get_grafik_06(){
      $query=$this->db->query("SELECT COUNT(nama) as total_06 FROM tbl_bukutamu WHERE MONTH(tanggal)='06'");
      return $query->result();
    }

    function get_grafik_07(){
      $query=$this->db->query("SELECT COUNT(nama) as total_07 FROM tbl_bukutamu WHERE MONTH(tanggal)='07'");
      return $query->result();
    }

    function get_grafik_08(){
      $query=$this->db->query("SELECT COUNT(nama) as total_08 FROM tbl_bukutamu WHERE MONTH(tanggal)='08'");
      return $query->result();
    }

    function get_grafik_09(){
      $query=$this->db->query("SELECT COUNT(nama) as total_09 FROM tbl_bukutamu WHERE MONTH(tanggal)='09'");
      return $query->result();
    }

    function get_grafik_10(){
      $query=$this->db->query("SELECT COUNT(nama) as total_10 FROM tbl_bukutamu WHERE MONTH(tanggal)='10'");
      return $query->result();
    }

    function get_grafik_11(){
      $query=$this->db->query("SELECT COUNT(nama) as total_11 FROM tbl_bukutamu WHERE MONTH(tanggal)='11'");
      return $query->result();
    }

    function get_grafik_12(){
      $query=$this->db->query("SELECT COUNT(nama) as total_12 FROM tbl_bukutamu WHERE MONTH(tanggal)='12'");
      return $query->result();
    }
  //akhir admin
}