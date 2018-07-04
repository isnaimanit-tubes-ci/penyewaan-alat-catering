<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Catering extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}
	// List all your items
	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('catering_model');
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['level'] = $session_data['level'];
			$data['catering_list'] = $this->catering_model->getDataCatering();
			$this->load->view('catering', $data);
			}
	}

	// Add a new item
	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('catering_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('pinjam', 'Pinjam', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_catering_view');
		} 	
			else{
			$this->catering_model->insertcatering();
			$this->load->view('tambah_catering_sukses');
			}
		}
		
	
	//Update one item
	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('pinjam', 'Pinjam', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');

		$this->load->model('catering_model');
		$data['catering'] = $this->catering_model->getCatering($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_catering_view',$data);
		}
		else
		{
			$this->catering_model->updateById($id);
			$this->load->view('edit_catering_sukses');
		}
	}

	//Delete one item
	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("catering_model");
		$this->catering_model->delete($id);
		redirect('catering');
	}
}

/* End of file catering.php */
/* Location: ./application/controllers/catering.php */

 