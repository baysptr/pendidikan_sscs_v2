<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Query_sekunder_m');
        $this->load->model('Auth_m');
    }

    public function index() {
        $this->load->view("login");
    }

    public function register() {
        $data['data_wilayah'] = $this->Query_sekunder_m->getAll("wilayah_ajar");
        $data['data_level'] = $this->Query_sekunder_m->getAll("level");
        $this->load->view('register', $data);
    }

    public function do_login() {
        $user = $this->input->post('user');
        $pass = md5($this->input->post('pass'));

        $result = $this->Auth_m->login($user, $pass)->row();

        if (isset($result)) {
            $data = [
                "id_account" => $result->id_account,
                "nama" => $result->nama,
                "username" => $result->username,
                "id_level" => $result->id_level,
                "koordinator" => $result->koordinator,
                "wilayah" => $result->wilayah,
                "level" => $result->level,
                "login" => true
            ];

            $this->session->set_userdata($data);

            if ($result->level == "Admin") {
                redirect(site_url() . "/admin/index");
            } else {
                redirect(site_url() . "/member/index");
            }
        } else {
            echo "<script>alert('Sorry, User dan pass anda tidak diketahui !!!');window.location = '" . base_url() . "'</script>";
        }
    }

    public function do_register() {
        $id = $this->Query_sekunder_m->getId('ACCOUNTS', 'account');
        $nama = $this->input->post("nama");
        $email = $this->input->post("email");
        $user = $this->input->post("user");
        $pass = md5($this->input->post("pass"));
        $level = $this->input->post("level");
        $wilayah = $this->input->post("wilayah");
        $koordinator = "0";
        $status = "0";

        $data = [
            "id" => $id,
            "nama" => $nama,
            "username" => $user,
            "password" => $pass,
            "email" => $email,
            "level" => $level,
            "wilayah" => $wilayah,
            "koordinator" => $koordinator,
            "status" => $status
        ];

        $result = $this->Query_sekunder_m->insert($data, "account");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }
    
    public function log_out() {
        $this->session->sess_destroy();
        
        redirect(base_url());
    }

}
