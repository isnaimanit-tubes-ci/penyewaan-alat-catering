<?php

class login extends CI_Controller
{
    /**
     * summary
     */
    public function __construct(){
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('user');
    }

    public function index() {

        $this->load->view('login_view');
    }

    public function cekLogin()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required|callback_cekDb');
        
        $this->load->model('user');
        $this->session->set_userdata('level');

        if ($this->form_validation->run() == FALSE ){
            $this->load->view('login_view');
        }else{
            redirect('catering','refresh');
        }
    }
    public function cekDb($password)
    {
        $this->load->model('user');
        $username = $this->input->post('username');
        $result = $this->user->Login($username,$password);
        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id'=>$row->id,
                    'username'=>$row->username,
                    'level'=>$row->level
                    );
                $this->session->set_userdata('logged_in',$sess_array);
            }
            return true;
        }else{
            $this->form_validation->set_message('cekDb',"login gagal username dan password tidak valid");
            return false;
        }

    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

     public function create() {
        $this->load->model('user');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('pass','pass','trim|required|callback_cekPassword');

        if ($this->form_validation->run()==FALSE) {
            $this->load->view('input');
        }else{
                $this ->user ->insert();
                $this ->load->view('login_view');
        }
    }
    public function cekPassword($pass)
    {
        $password = $this->input->post('password');
        if ($pass !=$password) {
            $this->form_validation->set_message('cekPassword',"Password tidak sama");
            return false;
        }else{
            return true;
        }
    }
    
}
?>