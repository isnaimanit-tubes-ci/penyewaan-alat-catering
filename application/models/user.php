<?php
 class user extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }
    public function login($username,$password)
    {
        $this->db->select('id,level,username,password');
        $this->db->from('login');
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        $query = $this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        }else{
            return false;
        }

    }

        public function insert() {
        $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            );
        $this->db->insert('login', $data);
    }


}
?>