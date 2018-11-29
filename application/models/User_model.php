<?php
class User_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_user()
    {
        $query = $this->db->get('tbl_users');
        return $query->result_array();
    }



}
    