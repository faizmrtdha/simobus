<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            You are not logged in
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('Auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Status Bus';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $sql1 = "SELECT * FROM bus WHERE id=1";
        $statusbus = $this->db->query($sql1)->row_array();
        $data['status_bus'] = $statusbus;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/status', $data);
        $this->load->view('templates/footer');
    }
}
// $sql2 = "SELECT * FROM bus WHERE id=2";
// $statusbus2 = $this->db->query($sql2)->row_array();
// $data['status_bus2'] = $statusbus2;
