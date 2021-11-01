<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // if (!isset($this->session->userdata['username'])) {
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //     You are not logged in
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span>
        //     </button>
        //   </div>');
        //     redirect('Auth');
        // }
    }

    public function penumpang()
    {
        $data['title'] = 'Jumlah Penumpang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 1])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus1/penumpang', $data);
        $this->load->view('templates/footer');
    }
    public function penumpang2()
    {
        $data['title'] = 'Jumlah Penumpang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 2])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus2/penumpang2', $data);
        $this->load->view('templates/footer');
    }
    public function penumpang3()
    {
        $data['title'] = 'Jumlah Penumpang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 3])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus3/penumpang3', $data);
        $this->load->view('templates/footer');
    }
    public function penumpang4()
    {
        $data['title'] = 'Jumlah Penumpang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 4])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus4/penumpang4', $data);
        $this->load->view('templates/footer');
    }
    public function penumpang5()
    {
        $data['title'] = 'Jumlah Penumpang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 5])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus5/penumpang5', $data);
        $this->load->view('templates/footer');
    }
    public function penumpang6()
    {
        $data['title'] = 'Jumlah Penumpang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 6])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus6/penumpang6', $data);
        $this->load->view('templates/footer');
    }

    public function penumpang_mentah()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();

        $sql1 = "SELECT DISTINCT jumlahPenumpang FROM sensor ORDER BY id DESC LIMIT 10";
        $penumpang = $this->db->query($sql1)->result_array();
        $data['penumpang'] = $penumpang;

        $sql = "SELECT jumlahPenumpang,locationLatitude,locationLongitude,date_taken FROM lokpen1 ORDER BY id DESC LIMIT 37";
        $penumpang = $this->db->query($sql)->result_array();
        $data['penumpang'] = $penumpang;

        $this->load->view('project/bus1/penumpang_mentah', $data);
    }
    public function penumpang_mentah2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();

        $sql = "SELECT jumlahPenumpang,locationLatitude,locationLongitude,date_taken FROM lokpen2 LIMIT 37";
        $penumpang = $this->db->query($sql)->result_array();
        $data['penumpang'] = $penumpang;

        $this->load->view('project/bus2/penumpang_mentah2', $data);
    }
    public function penumpang_mentah3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();

        $sql = "SELECT jumlahPenumpang,locationLatitude,locationLongitude,date_taken FROM lokpen3 LIMIT 37";
        $penumpang = $this->db->query($sql)->result_array();
        $data['penumpang'] = $penumpang;

        $this->load->view('project/bus3/penumpang_mentah3', $data);
    }
    public function penumpang_mentah4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();

        $sql = "SELECT jumlahPenumpang,locationLatitude,locationLongitude,date_taken FROM lokpen4 LIMIT 37";
        $penumpang = $this->db->query($sql)->result_array();
        $data['penumpang'] = $penumpang;

        $this->load->view('project/bus4/penumpang_mentah4', $data);
    }
    public function penumpang_mentah5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();

        $sql = "SELECT jumlahPenumpang,locationLatitude,locationLongitude,date_taken FROM lokpen5 LIMIT 37";
        $penumpang = $this->db->query($sql)->result_array();
        $data['penumpang'] = $penumpang;

        $this->load->view('project/bus5/penumpang_mentah5', $data);
    }
    public function penumpang_mentah6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();

        $sql = "SELECT jumlahPenumpang,locationLatitude,locationLongitude,date_taken FROM lokpen6 LIMIT 37";
        $penumpang = $this->db->query($sql)->result_array();
        $data['penumpang'] = $penumpang;

        $this->load->view('project/bus6/penumpang_mentah6', $data);
    }

    public function penumpangPHP()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 1])->result_array();
        $this->load->view('project/bus1/penumpang_source', $data);
    }
    public function penumpangPHP2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 2])->result_array();
        $this->load->view('project/bus2/penumpang_source2', $data);
    }
    public function penumpangPHP3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 3])->result_array();
        $this->load->view('project/bus3/penumpang_source3', $data);
    }
    public function penumpangPHP4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 4])->result_array();
        $this->load->view('project/bus4/penumpang_source4', $data);
    }
    public function penumpangPHP5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 5])->result_array();
        $this->load->view('project/bus5/penumpang_source5', $data);
    }
    public function penumpangPHP6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 6])->result_array();
        $this->load->view('project/bus6/penumpang_source6', $data);
    }


    public function statuspenumpangPHP()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus1/statuspenumpang_source', $data);
    }
    public function statuspenumpangPHP2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus2/statuspenumpang_source2', $data);
    }
    public function statuspenumpangPHP3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus3/statuspenumpang_source3', $data);
    }
    public function statuspenumpangPHP4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus4/statuspenumpang_source4', $data);
    }
    public function statuspenumpangPHP5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus5/statuspenumpang_source5', $data);
    }
    public function statuspenumpangPHP6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus6/statuspenumpang_source6', $data);
    }


    public function gps()
    {
        $data['title'] = 'Lokasi & Kecepatan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
        $data['koordinat'] = $this->db->get('bus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus1/gps', $data);
        $this->load->view('templates/footer');
    }
    public function gps2()
    {
        $data['title'] = 'Lokasi & Kecepatan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
        $data['koordinat'] = $this->db->get('bus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus2/gps2', $data);
        $this->load->view('templates/footer');
    }
    public function gps3()
    {
        $data['title'] = 'Lokasi & Kecepatan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
        $data['koordinat'] = $this->db->get('bus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus3/gps3', $data);
        $this->load->view('templates/footer');
    }
    public function gps4()
    {
        $data['title'] = 'Lokasi & Kecepatan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
        $data['koordinat'] = $this->db->get('bus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus4/gps4', $data);
        $this->load->view('templates/footer');
    }
    public function gps5()
    {
        $data['title'] = 'Lokasi & Kecepatan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
        $data['koordinat'] = $this->db->get('bus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus5/gps5', $data);
        $this->load->view('templates/footer');
    }
    public function gps6()
    {
        $data['title'] = 'Lokasi & Kecepatan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
        $data['koordinat'] = $this->db->get('bus')->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus6/gps6', $data);
        $this->load->view('templates/footer');
    }

    //Untuk MARKER
    public function marker_db()
    {
        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_db');
    }
    public function marker_data()
    {
        // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['koordinat'] = $this->db->where('id', '1')->get('bus')->row_array();

        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_xml', $data);
        //
    }
    public function marker_data2()
    {
        // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['koordinat'] = $this->db->where('id', '2')->get('bus')->row_array();

        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_xml2', $data);
        //
    }
    public function marker_data3()
    {
        // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['koordinat'] = $this->db->where('id', '3')->get('bus')->row_array();

        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_xml3', $data);
        //
    }
    public function marker_data4()
    {
        // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['koordinat'] = $this->db->where('id', '4')->get('bus')->row_array();

        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_xml4', $data);
        //
    }
    public function marker_data5()
    {
        // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['koordinat'] = $this->db->where('id', '5')->get('bus')->row_array();

        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_xml5', $data);
        //
    }
    public function marker_data6()
    {
        // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['koordinat'] = $this->db->where('id', '6')->get('bus')->row_array();

        //menampilkan data marker dengan format XML
        $this->load->view('maps/marker_xml6', $data);
        //
    }

    public function koordinatTerakhirPHP()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['koordinat'] = $this->db->get('bus')->result_array();
        $this->load->view('project/bus1/track_source', $data);
    }
    public function koordinatTerakhirPHP2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['koordinat'] = $this->db->get('bus')->result_array();
        $this->load->view('project/bus2/track_source2', $data);
    }
    public function koordinatTerakhirPHP3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['koordinat'] = $this->db->get('bus')->result_array();
        $this->load->view('project/bus3/track_source3', $data);
    }
    public function koordinatTerakhirPHP4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['koordinat'] = $this->db->get('bus')->result_array();
        $this->load->view('project/bus4/track_source4', $data);
    }
    public function koordinatTerakhirPHP5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['koordinat'] = $this->db->get('bus')->result_array();
        $this->load->view('project/bus5/track_source5', $data);
    }
    public function koordinatTerakhirPHP6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['koordinat'] = $this->db->get('bus')->result_array();
        $this->load->view('project/bus6/track_source6', $data);
    }

    public function kecepatanPHP()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['speed'] = $this->db->get_where('bus', ['id' => 1])->result_array();
        $this->load->view('project/bus1/kecepatan_source', $data);
    }
    public function kecepatanPHP2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['speed'] = $this->db->get_where('bus', ['id' => 2])->result_array();
        $this->load->view('project/bus2/kecepatan_source2', $data);
    }
    public function kecepatanPHP3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['speed'] = $this->db->get_where('bus', ['id' => 3])->result_array();
        $this->load->view('project/bus3/kecepatan_source3', $data);
    }
    public function kecepatanPHP4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['speed'] = $this->db->get_where('bus', ['id' => 4])->result_array();
        $this->load->view('project/bus4/kecepatan_source4', $data);
    }
    public function kecepatanPHP5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['speed'] = $this->db->get_where('bus', ['id' => 5])->result_array();
        $this->load->view('project/bus5/kecepatan_source5', $data);
    }
    public function kecepatanPHP6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        //get data from TABLE
        $data['speed'] = $this->db->get_where('bus', ['id' => 6])->result_array();
        $this->load->view('project/bus6/kecepatan_source6', $data);
    }

    public function asap()
    {
        $data['title'] = 'Status Udara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus1/asap', $data);
        $this->load->view('templates/footer');
    }
    public function asap2()
    {
        $data['title'] = 'Status Udara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus2/asap2', $data);
        $this->load->view('templates/footer');
    }
    public function asap3()
    {
        $data['title'] = 'Status Udara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus3/asap3', $data);
        $this->load->view('templates/footer');
    }
    public function asap4()
    {
        $data['title'] = 'Status Udara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus4/asap4', $data);
        $this->load->view('templates/footer');
    }
    public function asap5()
    {
        $data['title'] = 'Status Udara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus5/asap5', $data);
        $this->load->view('templates/footer');
    }
    public function asap6()
    {
        $data['title'] = 'Status Udara';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus6/asap6', $data);
        $this->load->view('templates/footer');
    }

    public function asapPHP()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus1/asap_source', $data);
    }
    public function asapPHP2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus2/asap_source2', $data);
    }
    public function asapPHP3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus3/asap_source3', $data);
    }
    public function asapPHP4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus4/asap_source4', $data);
    }
    public function asapPHP5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus5/asap_source5', $data);
    }
    public function asapPHP6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus6/asap_source6', $data);
    }

    public function ppmPHP()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus1/ppm_source', $data);
    }
    public function ppmPHP2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus2/ppm_source2', $data);
    }
    public function ppmPHP3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus3/ppm_source3', $data);
    }
    public function ppmPHP4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus4/ppm_source4', $data);
    }
    public function ppmPHP5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus5/ppm_source5', $data);
    }
    public function ppmPHP6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $data['ppm'] = $this->db->get('bus')->result_array();

        $this->load->view('project/bus6/ppm_source6', $data);
    }

    public function kecepatan()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 1])->row_array();
        $data['title'] = 'Database Kecepatan';

        $this->load->view('templates/header', $data); //utk template header
        $this->load->view('templates/sidebar', $data); // utk template sidebar
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus1/kecepatan', $data);
        $this->load->view('templates/footer');
    }
    public function kecepatan2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 2])->row_array();
        $data['title'] = 'Database Kecepatan';

        $this->load->view('templates/header', $data); //utk template header
        $this->load->view('templates/sidebar', $data); // utk template sidebar
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus2/kecepatan2', $data);
        $this->load->view('templates/footer');
    }
    public function kecepatan3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 3])->row_array();
        $data['title'] = 'Database Kecepatan';

        $this->load->view('templates/header', $data); //utk template header
        $this->load->view('templates/sidebar', $data); // utk template sidebar
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus3/kecepatan3', $data);
        $this->load->view('templates/footer');
    }
    public function kecepatan4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 4])->row_array();
        $data['title'] = 'Database Kecepatan';

        $this->load->view('templates/header', $data); //utk template header
        $this->load->view('templates/sidebar', $data); // utk template sidebar
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus4/kecepatan4', $data);
        $this->load->view('templates/footer');
    }
    public function kecepatan5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 5])->row_array();
        $data['title'] = 'Database Kecepatan';

        $this->load->view('templates/header', $data); //utk template header
        $this->load->view('templates/sidebar', $data); // utk template sidebar
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus5/kecepatan5', $data);
        $this->load->view('templates/footer');
    }
    public function kecepatan6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->db->get_where('bus', ['id' => 6])->row_array();
        $data['title'] = 'Database Kecepatan';

        $this->load->view('templates/header', $data); //utk template header
        $this->load->view('templates/sidebar', $data); // utk template sidebar
        $this->load->view('templates/topbar', $data);
        $this->load->view('project/bus6/kecepatan6', $data);
        $this->load->view('templates/footer');
    }

    public function kecepatan_mentah()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $sql1 = "SELECT * FROM sensor WHERE speed>=100";
        $kecepatan = $this->db->query($sql1)->result_array();
        $data['kecepatan'] = $kecepatan;
        // $this->db->order_by('speed', "desc")->limit(10)->get('sensor')->result_array();
        // $data['kecepatan'] = $this->db->get('sensor')->result_array();

        $this->load->view('project/bus1/kecepatan_mentah', $data);
    }
    public function kecepatan_mentah2()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $sql1 = "SELECT * FROM sensor2 WHERE speed>=100";
        $kecepatan = $this->db->query($sql1)->result_array();
        $data['kecepatan'] = $kecepatan;
        // $this->db->order_by('speed', "desc")->limit(10)->get('sensor')->result_array();
        // $data['kecepatan'] = $this->db->get('sensor')->result_array();

        $this->load->view('project/bus2/kecepatan_mentah2', $data);
    }
    public function kecepatan_mentah3()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $sql1 = "SELECT * FROM sensor3 WHERE speed>=100";
        $kecepatan = $this->db->query($sql1)->result_array();
        $data['kecepatan'] = $kecepatan;
        // $this->db->order_by('speed', "desc")->limit(10)->get('sensor')->result_array();
        // $data['kecepatan'] = $this->db->get('sensor')->result_array();

        $this->load->view('project/bus3/kecepatan_mentah3', $data);
    }
    public function kecepatan_mentah4()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $sql1 = "SELECT * FROM sensor4 WHERE speed>=100";
        $kecepatan = $this->db->query($sql1)->result_array();
        $data['kecepatan'] = $kecepatan;
        // $this->db->order_by('speed', "desc")->limit(10)->get('sensor')->result_array();
        // $data['kecepatan'] = $this->db->get('sensor')->result_array();

        $this->load->view('project/bus4/kecepatan_mentah4', $data);
    }
    public function kecepatan_mentah5()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $sql1 = "SELECT * FROM sensor5 WHERE speed>=100";
        $kecepatan = $this->db->query($sql1)->result_array();
        $data['kecepatan'] = $kecepatan;
        // $this->db->order_by('speed', "desc")->limit(10)->get('sensor')->result_array();
        // $data['kecepatan'] = $this->db->get('sensor')->result_array();

        $this->load->view('project/bus5/kecepatan_mentah5', $data);
    }
    public function kecepatan_mentah6()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        //get data from TABLE
        $sql1 = "SELECT * FROM sensor6 WHERE speed>=100";
        $kecepatan = $this->db->query($sql1)->result_array();
        $data['kecepatan'] = $kecepatan;
        // $this->db->order_by('speed', "desc")->limit(10)->get('sensor')->result_array();
        // $data['kecepatan'] = $this->db->get('sensor')->result_array();

        $this->load->view('project/bus6/kecepatan_mentah6', $data);
    }

    // public function spenumpang()
    // {
    //     $data['title'] = 'Jumlah Penumpang Seluruh Bus';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/spenumpang', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function sgps()
    // {
    //     $data['title'] = 'Lokasi & Kecepatan Bus 1';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
    //     $data['koordinat'] = $this->db->get('bus')->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/sgps', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function sasap()
    // {
    //     $data['title'] = 'Status Udara Seluruh Bus';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/sasap', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function skecepatan()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['nama'] = $this->db->get_where('bus', ['id' => 1])->row_array();
    //     $data['name'] = $this->db->get_where('bus', ['id' => 2])->row_array();
    //     $data['title'] = 'Database Kecepatan';
    //     //query database
    //     //$data['koordinat'] = $this->db->get('location_tab')->result_array();
    //     //tampilkan viewnya:
    //     $this->load->view('templates/header', $data); //utk template header
    //     $this->load->view('templates/sidebar', $data); // utk template sidebar
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/skecepatan', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function kecepatan2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['nama'] = $this->db->get_where('bus', ['id' => 2])->row_array();
    //     $data['title'] = 'Database Kecepatan';
    //     //query database
    //     //$data['koordinat'] = $this->db->get('location_tab')->result_array();
    //     //tampilkan viewnya:
    //     $this->load->view('templates/header', $data); //utk template header
    //     $this->load->view('templates/sidebar', $data); // utk template sidebar
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/kecepatan2', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function kecepatan_mentah2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     //get data from TABLE
    //     $data['kecepatan'] = $this->db->order_by('speed', "desc")->limit(10)->get('sensor2')->result_array();
    //     // $data['kecepatan'] = $this->db->get('sensor')->result_array();

    //     $this->load->view('project/kecepatan_mentah', $data);
    // }

    // public function asapPHP2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     //get data from TABLE
    //     $data['ppm'] = $this->db->get('bus')->result_array();

    //     $this->load->view('project/asap_source2', $data);
    // }

    // public function asap2()
    // {
    //     $data['title'] = 'Status Udara Bus 2';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/asap', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function kecepatanPHP2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //     //get data from TABLE
    //     $data['speed'] = $this->db->get('bus')->result_array();
    //     $this->load->view('project/kecepatan_source2', $data);
    // }

    // public function koordinatTerakhirPHP2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //     //get data from TABLE
    //     $data['koordinat'] = $this->db->get('bus')->result_array();
    //     $this->load->view('project/track_source2', $data);
    // }

    // public function marker_data2()
    // {
    //     // Purpose -> sebagai data mentah utk AJAX pada fungsi coordinate()
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     //get data from TABLE
    //     $data['koordinat'] = $this->db->where('id', '2')->get('bus')->row_array();

    //     //menampilkan data marker dengan format XML
    //     $this->load->view('maps/marker_xml2', $data);
    //     //
    // }

    // public function gps2()
    // {
    //     $data['title'] = 'Lokasi & Kecepatan Bus 2';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     // $data['koordinat'] = $this->db->order_by('ID', "desc")->limit(1)->get('sensor')->row_array();
    //     $data['koordinat'] = $this->db->where('id', '2')->get('bus')->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/gps2', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function statuspenumpangPHP2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     //get data from TABLE
    //     $data['jumlahPenumpang'] = $this->db->get('bus')->result_array();

    //     $this->load->view('project/statuspenumpang_source2', $data);
    // }

    // public function penumpang2()
    // {
    //     $data['title'] = 'Jumlah Penumpang Bus 2';
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('project/penumpang2', $data);
    //     $this->load->view('templates/footer');
    // }
    // public function penumpangPHP2()
    // {
    //     $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    //     //get data from TABLE
    //     $data['jumlahPenumpang'] = $this->db->get_where('bus', ['id' => 2])->row_array();
    //     $this->load->view('project/penumpang_source2', $data);
    // }
}
