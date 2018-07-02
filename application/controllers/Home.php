<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
       $this->load->view('gridDinamisView');
    }

    public function getDataCatering()
    {
        $this->load->model('Catering_model');
        $result = $this->Catering_model->getDataCatering(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addCatering(){
        $this->load->model('Catering_model');
        $this->Catering_model->save();
    }

    public function deleteCatering()
    {
        $this->load->model('Catering_model');
        $id = $this->input->post('id'); 
        $this->Catering_model->deleteGrid($id);
    }
        public function UpdateCatering()
    {
        $this->load->model('Catering_model');
        $id = $this->input->post('id'); 
        $this->Catering_model->updateGrid($id);
    }

}

/* End of file Home.php */

?>