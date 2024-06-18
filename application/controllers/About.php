<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
  public function index()
  {
      $this->load->model('Barang_model');
      $data['title'] = 'Tentang Kami';
      $data['active_menu'] = 'about';
      $data['barang'] = $this->Barang_model->get_all_barang(); // Mengambil data barang dari model
  
      $data['content'] = $this->load->view('about/about', $data, true); // Load the about view
  
      $this->load->view('template/template', $data);
  }
}
