<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Mardella
 */
class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Query_sekunder_m');
        $this->load->model('Custom_query_m');
        $this->load->model('Auth_m');
    }

    public function index() {
        $this->Auth_m->check_login();
        $id_level = $this->session->userdata('id_level');
        
        $this->load->view('index');
    }

    public function level() {
        $data['data_level'] = $this->Query_sekunder_m->getAll("level");
        $this->load->view('level', $data);
    }

    public function add_level() {
        $id = $this->Query_sekunder_m->getId('LEVEL', 'level');
        $level = $this->input->post('level');
        $data = [
            "id" => $id,
            "level" => $level
        ];

        if ($this->Query_sekunder_m->insert($data, "level") == TRUE) {
            echo json_encode(array("status" => array("data" => TRUE)));
        } else {
            echo json_encode(array("status" => array("data" => FALSE)));
        }
    }

    public function update_level() {
        $id = $this->input->post('id');
        $level = $this->input->post('level');
        $data = [
            "level" => $level
        ];

        if ($this->Query_sekunder_m->update($data, $id, "level") == TRUE) {
            echo json_encode(array("status" => array("data" => TRUE)));
        } else {
            echo json_encode(array("status" => array("data" => FALSE)));
        }
    }

    public function show_level($id) {
        $data = $this->Query_sekunder_m->getWhere($id, "level");

        echo json_encode($data);
    }

    public function delete_level($id) {

        if ($this->Query_sekunder_m->delete($id, "level") == TRUE) {
            echo "<script>alert('Sukses');window.location = '" . site_url() . "/admin/level'</script>";
        } else {
            echo "<script>alert('Gagal');window.location = '" . site_url() . "/admin/level'</script>";
        }
    }

    public function modul() {
        $data['data_modul'] = $this->Query_sekunder_m->getAll("modul");
        $this->load->view('modul', $data);
    }

    public function show_modul($id) {
        $data = $this->Query_sekunder_m->getWhere($id, "modul");

        echo json_encode($data);
    }

    public function add_modul() {
        $id = $this->Query_sekunder_m->getId('MODUL', 'modul');
        $nama_modul = $this->input->post('nama_modul');
        $deskripsi_modul = $this->input->post('deskripsi_modul');

        $config['upload_path'] = './resource/modul/';
        $config['allowed_types'] = 'pdf|docx|doc';
        $config['max_size'] = '25600';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_modul')) {
            $error = array('error' => $this->upload->display_errors());

            print_r($error);
        } else {
            $data = $this->upload->data('file_name');

            $query = [
                "id" => $id,
                "nama_modul" => $nama_modul,
                "deskripsi_modul" => $deskripsi_modul,
                "file_modul" => $data
            ];

            if ($this->Query_sekunder_m->insert($query, "modul") == TRUE) {
                echo json_encode(array("status" => array("data" => TRUE)));
            } else {
                echo json_encode(array("status" => array("data" => FALSE)));
            }
        }
    }

    public function update_modul() {
        $id = $this->input->post("id");
        $nama_modul = $this->input->post('nama_modul');
        $deskripsi_modul = $this->input->post('deskripsi_modul');
        $check = ($this->input->post('check') != null) ? $this->input->post('check') : "";

        if ($check == "1") {
//            $ccc = $this->Query_sekunder_m->getWhere($id, 'modul');
//            unlink(base_url() . "resource/modul/" . $ccc->file_modul);

            $config['upload_path'] = './resource/modul/';
            $config['allowed_types'] = 'pdf|docx|doc';
            $config['max_size'] = '25600';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file_modul')) {
                $error = array('error' => $this->upload->display_errors());

                print_r($error);
            } else {
                $data = $this->upload->data('file_name');

                $query = [
                    "nama_modul" => $nama_modul,
                    "deskripsi_modul" => $deskripsi_modul,
                    "file_modul" => $data
                ];

                if ($this->Query_sekunder_m->update($query, $id, "modul") == TRUE) {
                    echo json_encode(array("status" => array("data" => TRUE)));
                } else {
                    echo json_encode(array("status" => array("data" => FALSE)));
                }
            }
        } else {
            $query = [
                "nama_modul" => $nama_modul,
                "deskripsi_modul" => $deskripsi_modul
            ];

            if ($this->Query_sekunder_m->update($query, $id, "modul") == TRUE) {
                echo json_encode(array("status" => array("data" => TRUE)));
            } else {
                echo json_encode(array("status" => array("data" => FALSE)));
            }
        }
    }

    public function delete_modul($id) {

        if ($this->Query_sekunder_m->delete($id, "modul") == TRUE) {
            echo "<script>alert('Sukses');window.location = '" . site_url() . "/admin/modul'</script>";
        } else {
            echo "<script>alert('Gagal');window.location = '" . site_url() . "/admin/modul'</script>";
        }
    }

    public function parameter($id) {
        $data['modul'] = $this->Query_sekunder_m->getWhere($id, "modul");
        $data['data_parameter'] = $this->Query_sekunder_m->getAll("detail_modul");

        $this->load->view("parameter", $data);
    }

    public function add_parameter() {
        $id = $this->Query_sekunder_m->getId("PARAMETER", "detail_modul");
        $id_modul = $this->input->post("id_modul");
        $parameter = $this->input->post("parameter");
        $tolok_ukur = "N";

        $data = [
            "id" => $id,
            "id_modul" => $id_modul,
            "parameter" => $parameter,
            "tolok_ukur" => $tolok_ukur
        ];

        $result = $this->Query_sekunder_m->insert($data, "detail_modul");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function delete_parameter($id) {
        $result = $this->Query_sekunder_m->delete($id, "detail_modul");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function show_parameter($id) {
        $data = $this->Query_sekunder_m->getWhere($id, "detail_modul");

        echo json_encode($data);
    }

    public function update_parameter() {
        $id = $this->input->post('id');
        $id_modul = $this->input->post("id_modul");
        $parameter = $this->input->post("parameter");
        $tolok_ukur = "N";

        $data = [
            "id_modul" => $id_modul,
            "parameter" => $parameter,
            "tolok_ukur" => $tolok_ukur
        ];

        $result = $this->Query_sekunder_m->update($data, $id, "detail_modul");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function wilayah_ajar() {
        $data['data_wilayah'] = $this->Query_sekunder_m->getAll("wilayah_ajar");
        $this->load->view("wilayah_ajar", $data);
    }

    public function add_wilayah_ngajar() {
        $id = $this->Query_sekunder_m->getId("WILAYAH", "wilayah_ajar");
        $wilayah = $this->input->post("wilayah");

        $data = [
            "id" => $id,
            "wilayah" => $wilayah
        ];

        $result = $this->Query_sekunder_m->insert($data, "wilayah_ajar");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function delete_wilayah_ajar($id) {
        $result = $this->Query_sekunder_m->delete($id, "wilayah_ajar");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function show_wilayah_ngajar($id) {
        $data = $this->Query_sekunder_m->getWhere($id, "wilayah_ajar");

        echo json_encode($data);
    }

    public function update_wilayah_ngajar() {
        $id = $this->input->post('id');
        $wilayah = $this->input->post("wilayah");

        $data = [
            "wilayah" => $wilayah
        ];

        $result = $this->Query_sekunder_m->update($data, $id, "wilayah_ajar");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function member() {
        $data['data_member'] = $this->Custom_query_m->custom_member_admin();
        $this->load->view("member", $data);
    }

    public function change_koordinator($id, $value) {
        $koordinator = ($value == "0") ? "1" : "0";
        $data = ["koordinator" => $koordinator];

        $result = $this->Query_sekunder_m->update($data, $id, "account");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function change_status($id, $value) {
        $status = ($value == "0") ? "1" : "0";
        $data = ["status" => $status];

        $result = $this->Query_sekunder_m->update($data, $id, "account");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }
    
    public function hapus_member($id) {
        $result = $this->Query_sekunder_m->delete($id, "account");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }
    
    public function menu() {
        $data['data_menu'] = $this->Query_sekunder_m->getAll("menu");

        $this->load->view("menu", $data);
    }

    public function add_menu() {
        $id = $this->Query_sekunder_m->getId("MENU", "menu");
        $menu = $this->input->post("menu");
        $link = $this->input->post("link");

        $data = [
            "id" => $id,
            "menu" => $menu,
            "link" => $link
        ];

        $result = $this->Query_sekunder_m->insert($data, "menu");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function delete_menu($id) {
        $result = $this->Query_sekunder_m->delete($id, "menu");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function show_menu($id) {
        $data = $this->Query_sekunder_m->getWhere($id, "menu");

        echo json_encode($data);
    }

    public function update_menu() {
        $id = $this->input->post('id');
        $menu = $this->input->post("menu");
        $link = $this->input->post("link");

        $data = [
            "id" => $id,
            "menu" => $menu,
            "link" => $link
        ];

        $result = $this->Query_sekunder_m->update($data, $id, "menu");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }
    
    public function detail_level($id) {
        $data['data_level'] = $this->Query_sekunder_m->getWhere($id, "level");
        $data['data_d_level'] = $this->Custom_query_m->custom_link_menu($id);
        $data['data_menu'] = $this->Query_sekunder_m->getAll("menu");
        
        $this->load->view("detail_level", $data);
    }
    
    public function add_d_level() {
        $id = $this->Query_sekunder_m->getId("D_MENU", "detail_level");
        $id_level = $this->input->post("id_level");
        $menu = $this->input->post("menu");

        $data = [
            "id" => $id,
            "id_level" => $id_level,
            "id_menu" => $menu
        ];

        $result = $this->Query_sekunder_m->insert($data, "detail_level");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function delete_d_level($id) {
        $result = $this->Query_sekunder_m->delete($id, "detail_level");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

    public function show_d_level($id) {
        $data = $this->Query_sekunder_m->getWhere($id, "detail_level");

        echo json_encode($data);
    }

    public function update_d_level() {
        $id = $this->input->post('id');
        $id_level = $this->input->post('id_level');
        $menu = $this->input->post("menu");

        $data = [
            "id_level" => $id_level,
            "id_menu" => $menu
        ];

        $result = $this->Query_sekunder_m->update($data, $id, "detail_level");

        if ($result == TRUE) {
            echo json_encode("TRUE");
        } else {
            echo json_encode("FALSE");
        }
    }

}
