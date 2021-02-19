<?php
use Restserver\Libraries\REST_Controller;

class Events extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    header("Access-Control-Allow-Origin: *");
    $this->load->model('events_model');
  }

  public function eventlist_get()
  {
    $data  = $this->events_model->daftar_event();
    $this->response( [ 'event' => $data ], 200 );
  }
}

 ?>
