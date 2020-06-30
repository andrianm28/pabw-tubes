<?php
class Register_model extends CI_model
{
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function tampil_data()
    {
        return $this->db->get('user');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
    