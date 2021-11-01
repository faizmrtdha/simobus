<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    public function ambil_data($id)
    {
        $this->db->where('username', $id);
        return $this->db->get('user')->row();
    }
}
