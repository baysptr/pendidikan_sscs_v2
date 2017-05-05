<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Custom_query_m
 *
 * @author Mardella
 */
class Custom_query_m extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function custom_member_admin() {
        $this->db
                ->select("account.id, account.nama, account.username, account.koordinator, account.status, wilayah_ajar.wilayah, level.level")
                ->from("account")
                ->join("wilayah_ajar", "wilayah_ajar.id=account.wilayah")
                ->join("level", "level.id=account.level");
        
        return $this->db->get()->result_array();
    }
    
    public function custom_link_menu($id) {
        $this->db
                ->select("detail_level.id, menu.menu")
                ->from("detail_level")
                ->join("level", "level.id=detail_level.id_level")
                ->join("menu", "menu.id = detail_level.id_menu")
                ->where("detail_level.id_level", $id);
        return $this->db->get()->result_array();
    }
}
