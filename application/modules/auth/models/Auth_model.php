<?php
class Auth_model extends CI_Model {

    public function __construct() {
        $this->load->helper('security');
    }
    
    public function login($data) {

        $condition = "user_name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . do_hash($data['password']) . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {

            return false;
        }
    }

    // Read data from database to show data in admin page
    public function read_user_information($username) {

        $condition = "user_name =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }


	
}