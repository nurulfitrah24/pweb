<?php
/**
 *
 */
class Events_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  public function daftar_event()
  {
    $query = $this->db->get('listevent');
    return $query->result();
  }

}
?>
