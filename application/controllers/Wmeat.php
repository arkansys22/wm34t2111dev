<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wmeat extends CI_Controller {

    function __construct()
  {
    parent::__construct();
    /* memanggil model untuk ditampilkan pada masing2 modul */
    $this->load->model(array('Crud_m'));
    /* memanggil function dari masing2 model yang akan digunakan */
  }

  public function index()
  {
		$data['status']   = 'active';
    $this->load->view('fronts/wmeat2', $data);
  }

  public function shop()
  {
		$data['status']   = 'active';
    $this->load->view('fronts/shop/v_index', $data);
  }

  public function shopdetail()
  {
		$data['status']   = 'active';
    $this->load->view('fronts/shop/v_detail', $data);
  }

  public function cart()
  {
    $data['status']   = 'active';
    $this->load->view('fronts/shop/v_cart', $data);
  }

  public function checkout()
  {
    $data['status']   = 'active';
    $this->load->view('fronts/shop/v_checkout', $data);
  }



}
