<?php
use Restserver\Libraries\REST_Controller;

class Tari extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    header("Access-Control-Allow-Origin: *");
    $this->load->model('tari_model');
  }

  public function taridetail_get()
  {
    $where = '';
    if (null !== $this->get('id')) {
      $tari = $this->get('id');
      $where = "kode_event LIKE '" . $tari . "'" ;
    }
    $data = $this->tari_model->detail_tari($where);
    $this->response( [ 'tari' => $data ], 200 );
  }
}

 ?>
