<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
  public function index()
  {
      $this->load->model('Barang_model');
      $data['title'] = 'Beranda';
      $data['active_menu'] = 'home';
      $data['barang'] = $this->Barang_model->get_all_barang(); // Mengambil data barang dari model
  
      $data['content'] = $this->load->view('beranda/beranda', $data, true);
  
      $this->load->view('template/template', $data);
  }
  
}
