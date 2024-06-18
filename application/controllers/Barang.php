<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('pagination');
    }

    public function data_barang() {
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->get_all_barang();
        $data['content'] = $this->load->view('barang/list_barang', $data, true);

        $this->load->view('template/template', $data);
    }

    public function search_barang() {
        $keyword = $this->input->post('keyword');

        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->search_data_barang($keyword);
        $data['not_found'] = empty($data['barang']);
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('barang/list_barang', $data, true);

        $this->load->view('template/template', $data);
    }

    public function tambah_barang() {
        $this->form_validation->set_rules('Kode_Barang', 'Kode Barang', 'required', [
            'required' => 'Kolom %s wajib diisi.'
        ]);
        $this->form_validation->set_rules('Nama_Barang', 'Nama Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('Kategori_Barang', 'Kategori Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('Deskripsi_Barang', 'Deskripsi Barang', 'required|min_length[20]', [
            'required' => 'Kolom %s harus diisi.',
            'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.'
        ]);
        $this->form_validation->set_rules('Harga_Jual', 'Harga Jual', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('Stok_Barang', 'Stok Barang', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.'
        ]);
        $this->form_validation->set_rules('Supplier_Barang', 'Supplier Barang', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);
        $this->form_validation->set_rules('Tanggal_Masuk', 'Tanggal Masuk', 'required', [
            'required' => 'Kolom %s harus diisi.'
        ]);

        // Check if form validation fails
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Barang';
            $data['active_menu'] = 'data_barang';
            $data['content'] = $this->load->view('barang/tambah_barang', '', true);
            $this->load->view('template/template', $data);
        } else {
            // Prepare data for insertion
            $data_insert = [
                'Kode_Barang' => $this->input->post('Kode_Barang'),
                'Nama_Barang' => $this->input->post('Nama_Barang'),
                'Kategori_Barang' => $this->input->post('Kategori_Barang'),
                'Deskripsi_Barang' => $this->input->post('Deskripsi_Barang'),
                'Harga_Jual' => $this->input->post('Harga_Jual'),
                'Stok_Barang' => $this->input->post('Stok_Barang'),
                'Supplier_Barang' => $this->input->post('Supplier_Barang'),
                'Tanggal_Masuk' => $this->input->post('Tanggal_Masuk')
            ];

            // Insert data into database
            $insert = $this->Barang_model->tambah_barang($data_insert);
            if ($insert) {
                $this->session->set_flashdata('success', 'Data barang berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Data barang gagal ditambahkan.');
            }
            redirect('barang/data_barang');
        }
    }

    public function edit_barang($id)
{
    $id_barang = $this->input->post('ID_Barang');

    $this->form_validation->set_rules('Kode_Barang', 'Kode Barang', 'required', [
        'required' => 'Kolom %s wajib diisi.'
    ]);
    $this->form_validation->set_rules('Nama_Barang', 'Nama Barang', 'required', [
        'required' => 'Kolom %s harus diisi.'
    ]);
    $this->form_validation->set_rules('Kategori_Barang', 'Kategori Barang', 'required', [
        'required' => 'Kolom %s harus diisi.'
    ]);
    $this->form_validation->set_rules('Deskripsi_Barang', 'Deskripsi Barang', 'required|min_length[20]', [
        'required' => 'Kolom %s harus diisi.',
        'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.'
    ]);
    $this->form_validation->set_rules('Harga_Jual', 'Harga Jual', 'required|numeric', [
        'required' => 'Kolom %s harus diisi.',
        'numeric' => 'Kolom %s hanya boleh berisi angka.'
    ]);
    $this->form_validation->set_rules('Stok_Barang', 'Stok Barang', 'required|numeric', [
        'required' => 'Kolom %s harus diisi.',
        'numeric' => 'Kolom %s hanya boleh berisi angka.'
    ]);
    $this->form_validation->set_rules('Supplier_Barang', 'Supplier Barang', 'required', [
        'required' => 'Kolom %s harus diisi.'
    ]);
    $this->form_validation->set_rules('Tanggal_Masuk', 'Tanggal Masuk', 'required', [
        'required' => 'Kolom %s harus diisi.'
    ]);

    if ($this->form_validation->run() == false) {
        $data['title'] = 'Ubah Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->get_barang_by_id($id);
        $data['content'] = $this->load->view('barang/ubah_barang', $data, true);
        $this->load->view('template/template', $data);
    } else {
        $data = [
            'Kode_Barang' => $this->input->post('Kode_Barang'),
            'Nama_Barang' => $this->input->post('Nama_Barang'),
            'Kategori_Barang' => $this->input->post('Kategori_Barang'),
            'Deskripsi_Barang' => $this->input->post('Deskripsi_Barang'),
            'Harga_Jual' => $this->input->post('Harga_Jual'),
            'Stok_Barang' => $this->input->post('Stok_Barang'),
            'Supplier_Barang' => $this->input->post('Supplier_Barang'),
            'Tanggal_Masuk' => $this->input->post('Tanggal_Masuk'),
        ];

        $update = $this->Barang_model->edit_barang($id, $data);
        if ($update) {
            $this->session->set_flashdata('success', 'Data barang berhasil diupdate.');
        } else {
            $this->session->set_flashdata('error', 'Data barang gagal diupdate.');
        }

        redirect('barang/data_barang');
    }
}


    public function hapus_barang($id_barang) {
        $hapus = $this->Barang_model->hapus_barang($id_barang);

        if ($hapus) {
            $this->session->set_flashdata('success', 'Data barang berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data barang gagal dihapus.');
        }

        redirect('barang/data_barang');
    }

}

