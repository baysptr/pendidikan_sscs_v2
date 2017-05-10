<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth_m
 *
 * @author Mardella
 */
class Auth_m extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function check_login() {
        if (!isset($this->session->userdata['login'])) {
//            redirect(base_url());
            echo "<script>alert('Sorry, kamu belum login !!! login please');window.location = '".base_url()."'</script>";
        }
    }
    
    public function login($user, $pass){
        $this->db
                ->select("account.id as id_account, account.nama, account.username, account.password, account.koordinator, account.wilayah, level.id as id_level, level.level")
                ->from("account")
                ->join("level", "level.id=account.level")
                ->where("account.username", $user)
                ->where("account.password", $pass)
                ->where("account.status", 1);
        return $this->db->get();
    }
}
