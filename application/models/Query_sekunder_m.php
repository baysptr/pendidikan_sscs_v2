<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query_sekunder_m
 *
 * @author Mardella
 */
class Query_sekunder_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function getAll($table) {
        return $this->db->get($table)->result_array();
    }
    
    public function getWhere($id, $table) {
        $this->db
                ->select("*")
                ->from($table)
                ->where("id", $id);
        return $this->db->get()->row();
    }

    public function getId($caption, $table) {
        $no = $this->countAll($table) + 1;
        $id = uniqid($caption . "_" . $no . "_");

        return $id;
    }

    public function countAll($table) {
        return $this->db->get($table)->num_rows();
    }

    public function insert($data, $table) {
        return $this->db->insert($table, $data);
    }
    
    public function update($data, $id, $table) {
        return $this->db->update($table, $data, array("id" => $id));
    }
    
    public function delete($id, $table) {
        return $this->db->delete($table, array("id" => $id));
    }

}
