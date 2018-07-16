<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->helper('url','form','file');
		$this->load->model('catering_model');
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['level'] = $session_data['level'];
			$data['catering_list'] = $this->catering_model->getDataCatering();
			$this->load->view('admin/Header');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('admin/Footer');
		}
		
	}

	public function create()
	{
		$this->load->helper('url','form','file');
		$this->load->library('form_validation');
		$this->load->model('catering_model');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('pinjam', 'Pinjam', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('admin/Header');
			$this->load->view('tambah_catering_view');
			$this->load->view('admin/Footer');
		} 	
		else{
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 100000000;
			$config['max_width'] = 10240;
			$config['max_height'] = 7680;

			$this->load->library('upload', $config);

			if(! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/Header');
				$this->load->view('tambah_data_view', $error);
				$this->load->view('admin/Footer');
			}

			else{
				$data = array('upload_data' => $this->upload->data());

				$data['input'] = array(
				 		'nama' =>$this->input->post('nama'),
				 		'pinjam' =>$this->input->post('pinjam'),
				 		'jumlah' =>$this->input->post('jumlah'),
				 		'tanggal' => $this->input->post('tanggal'),
				 		'harga' =>$this->input->post('harga'),
				 		'gambar' => $this->upload->data('file_name')
				 );

				$this->catering_model->insertcatering($data['input']);

				$this->load->view('admin/Header');
				$this->load->view('admin/dashboard');
				$this->load->view('admin/Footer');
			}
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
