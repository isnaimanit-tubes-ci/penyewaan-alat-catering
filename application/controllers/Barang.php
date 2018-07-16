<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('Barang_model');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$data['Barang_list']=$this->Barang_model->get_barang();
		$this->load->view('admin/Header');
		$this->load->view('admin/Barang', $data);
		$this->load->view('admin/Footer');
	}

	public function C_create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('stock', 'stock', 'required');
		
		$config['upload_path'] = 'assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/Header');
			$this->load->view('admin/tambah_barang_view');
			$this->load->view('admin/Footer');
		} else {
			if (!$this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error); 
            } else {
            	 $data = array('upload_data' => $this->upload->data());
                 $data['input'] = array(
                 	'id_barang' => $this->input->post('id_barang'),
                 	'nama_barang' => $this->input->post('nama_barang'),
                 	'stock' => $this->input->post('stock'),
                 	'gambar' => $this->upload->data('file_name')
                 );
              	 //query tambah data
				 $this->model->set_article(0,$data['input']);
				 //kembali ke home
				 redirect('Barang');
            }
        }
    }


	public function C_edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('id_barang', 'id_barang', 'required');
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('stock', 'stock', 'required');
		//Mengambil data dari model untuk di edit 

		//Mendapatkan key id dati Route
		$id = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['show_barang'] = $this->model->get_article_by_id($id);
		$data['id_barang'] = $data['show_barang']['id_barang'];
		$data['nama_barang'] = $data['show_barang']['nama_barang'];
		$data['stock'] = $data['show_barang']['stock'];
		$data['gambar'] = $data['show_barang']['gambar'];
		
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/Header');
			$this->load->view('Barang/edit_barang_view',$data);
			$this->load->view('admin/Footer');
		} else {
			$config['upload_path'] = 'assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data = array('upload_data' => $this->upload->data());

				$data['input'] = array(
	                'id_barang' => $this->input->post('id_barang'),
                 	'nama_barang' => $this->input->post('nama_barang'),
                 	'stock' => $this->input->post('stock'),
                 	'gambar' => $this->upload->data('file_name')
	                 );
				//query Edit data
				$this->model->set_article($id,$data['input']);
				//kembali ke home
				redirect('Barang/');
			}
		}	
	}
	
	public function delete(){
		$id = $this->uri->segment(3);
		$this->model->delete_barang($id);
		redirect('Paket_Tour','refresh');
	}
}
