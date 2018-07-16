<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Catering_model extends CI_Model {

 public function insertcatering($data)
 {
 	
 	$this->db->insert('catering', $data);
 }

public function getDataCatering()
	{
		$query = $this->db->get("catering");
		return $query->result_array();
	}
public function getCatering($id)
		{
			$this->db->where('id', $id);
			$query = $this->db->get('catering');
			return $query->result();
		}


		public function updateById($id)
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'pinjam' => $this->input->post('pinjam'),
				'jumlah' =>$this->input->post('jumlah'),
				'tanggal' => $this->input->post('tanggalPengembalian'),
				'harga' => $this->input->post('harga'),
			);
			$this->db->where('id', $id);
			$this->db->update('catering', $data);
		}

		public function delete($id) { 
         $query = $this->db->query("Delete from catering where id=$id");
         } 
     

     public function save()
     {
     	$data= $this->input->post();
     	$this->db->insert('catering', $data);
     }
          public function deleteGrid($id)
     {
     	$this->db->where('id', $id);
     	$this->db->delete('catering');
     }
          public function updateGrid($id)
     {
     	$this->db->where('id', $id);
     	$data= $this->input->post();
     	$this->db->update('catering', $data);
     }
 }



     





/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */
