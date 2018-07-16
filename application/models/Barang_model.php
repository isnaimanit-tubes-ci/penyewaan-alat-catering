<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function __construct()
     {
          $this->load->database();
     } 
     
     public function get_barang(){
          $query = $this->db->get('barang');
          return $query;
     }

     public function get_all_barang(){
          $this->db->order_by('nama_barang');

          $query = $this->db->get('barang');
          return $query->result();
     }

     public function set_barang($id_barang = 0, $data){
          $this->load->helper('url');
          //Membedakan untuk query create dan update
          if($id_barang == 0){
               $this->db->insert('barang', $data);
          }else{
               $this->db->where('id_barang',$id_barang);
               return $this->db->update('barang', $data);
          }
     }

     public function delete_barang($id_barang){
          $this->db->where('id_barang', $id_barang);
          return $this->db->delete('barang');
     }

     public function generate_brg_dropdown(){
            $this->db->select ('
                barang.id_barang,
                barang.nama_barang
            ');
            $result = $this->db->get('barang');

            // Membuat array dropdown
            // Baris pertama select (default)
            $dropdown[''] = 'Please Select';
            if ($result->num_rows() > 0) {
              
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['id_barang']] = $row['nama_barang'];
                }
            }
            return $dropdown;
     }

}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>