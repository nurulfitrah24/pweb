<?php
/**
 *
 */
class Tari_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function detail_tari($where= '')
  {
    /* SQL
    SELECT * FROM `infor_tari`
    INNER JOIN listtari t ON(l.kode_event = t.id_tari)
    WHERE kode_event LIKE '%jaipong%'
    */

    $this->db->join('listevent l', 'ON(l.kode_event = t.id_tari)');
    if ( $where != '' ) $this->db->where($where);
    $query = $this->db->get('info_tari t');
    return $query->result();
  }

}
?>
