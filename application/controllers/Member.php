<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author baysptr
 */
class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Layout_m");
        $this->load->model("Auth_m");
        $this->load->model("Custom_query_m");
        $this->load->model("Query_sekunder_m");

        $this->Auth_m->check_login();
    }

    public function index() {
        $id_level = $this->session->userdata('id_level');

        $data['link_menu'] = $this->Custom_query_m->custom_link_index($id_level);

        $data['meta'] = $this->Layout_m->meta();
        $data['javascript'] = $this->Layout_m->javascript();

        $this->load->view('member/index', $data);
    }

    public function modul() {
        $id_level = $this->session->userdata('id_level');

        $data['link_menu'] = $this->Custom_query_m->custom_link_index($id_level);

        $data['title'] = "Modul";
        $data['meta'] = $this->Layout_m->meta();
        $data['javascript'] = $this->Layout_m->javascript();

        $data['data_modul'] = $this->Query_sekunder_m->getAll("modul");
        $this->load->view('member/modul', $data);
    }

    public function parameter($id) {
        $id_level = $this->session->userdata('id_level');

        $data['link_menu'] = $this->Custom_query_m->custom_link_index($id_level);

        $data['title'] = "Detail Modul";
        $data['meta'] = $this->Layout_m->meta();
        $data['javascript'] = $this->Layout_m->javascript();

        $data['data_parameter'] = $this->Custom_query_m->custom_detail_modul($id);

        $this->load->view("member/parameter", $data);
    }

    public function susun_jadwal() {
        if ($this->session->userdata('koordinator') == 0) {
            echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '" . site_url() . "/member'</script>";
        }
        $id_level = $this->session->userdata('id_level');
        $data['link_menu'] = $this->Custom_query_m->custom_link_index($id_level);
        $data['data_modul'] = $this->Query_sekunder_m->getAll("modul");
        $data['data_wilayah'] = $this->Query_sekunder_m->getWhere($this->session->userdata('wilayah'), "wilayah_ajar");

        $data['title'] = "Susun Jadwal";
        $data['meta'] = $this->Layout_m->meta();
        $data['javascript'] = $this->Layout_m->javascript();

        $this->load->view("member/susun_jadwal", $data);
    }

    public function add_susun_jadwal() {
        $id = $this->Query_sekunder_m->getId("JADWAL", "jadwal");
        $tgl = $this->input->post("tgl");
        $modul = $this->input->post("modul");
        $wilayah = $this->session->userdata('wilayah');
        $korwil = $this->session->userdata('id_account');

        $data = [
            "id" => $id,
            "tgl_hari" => $tgl,
            "modul" => $modul,
            "wilayah_ngajar" => $wilayah,
            "korwil" => $korwil
        ];
        
        $result = $this->Query_sekunder_m->insert($data, "jadwal");
        
        if($result == TRUE){
            echo "<script>alert('Selamat anda telah berhasil membuat jadwal !!!'); window.location = '". site_url()."/member/susun_jadwal';</script>";
        }else{
            echo "<script>alert('Maaf anda Gagal membuat jadwal !!!'); window.location = '". site_url()."/member/susun_jadwal';</script>";
        }
    }

}
