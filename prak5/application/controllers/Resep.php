<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller { 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Daftar_Resep/list');
	}

  public function ayamgagape()
	{
		$this->load->view('Daftar_Resep/ayamgagape');
	}

  public function bandengpallumara()
	{
		$this->load->view('Daftar_Resep/bandengpallumara');
	}

  public function barobbo()
	{
		$this->load->view('Daftar_Resep/barobbo');
	}

  public function gogoso()
	{
		$this->load->view('Daftar_Resep/gogoso');
	}

  public function jalangkote()
	{
		$this->load->view('Daftar_Resep/jalangkote');
	}

  public function kambuparia()
	{
		$this->load->view('Daftar_Resep/kambuparia');
	}

  public function kuebarongkopisang()
	{
		$this->load->view('Daftar_Resep/kuebarongkopisang');
	}

  public function pallubasaa()
	{
		$this->load->view('Daftar_Resep/pallubasaa');
	}

  public function pallucelacakalang()
	{
		$this->load->view('Daftar_Resep/pallucelacakalang');
	}

  public function sopkonrobakar()
	{
		$this->load->view('Daftar_Resep/sopkonrobakar');
	}

  public function sotobetawi()
	{
		$this->load->view('Daftar_Resep/sotobetawi');
	}

}
