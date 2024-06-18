<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_barang() {
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    
    public function get_barang_count() {
        return $this->db->count_all('barang');
    }
    
    public function search_data_barang($keyword) {
        $this->db->like('ID_Barang', $keyword)
                 ->or_like('Kode_Barang', $keyword)
                 ->or_like('Nama_Barang', $keyword)
                 ->or_like('Kategori_Barang', $keyword)
                 ->or_like('Harga_Jual', $keyword)
                 ->or_like('Stok_Barang', $keyword)
                 ->or_like('Supplier_Barang', $keyword)
                 ->or_like('Tanggal_Masuk', $keyword);
    
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    
    public function get_barang_by_id($id_barang) {
        $query = $this->db->get_where('barang', array('ID_Barang' => $id_barang));
        return $query->row_array();
    }
    
    public function tambah_barang($data) {
        return $this->db->insert('barang', $data);
    }

    public function hapus_barang($id_barang) {
        $this->db->where('ID_Barang', $id_barang);
        return $this->db->delete('barang');
    }
    
    public function edit_barang($id_barang, $data)
{
    $this->db->where('ID_Barang', $id_barang);
    return $this->db->update('barang', $data);
}

}
