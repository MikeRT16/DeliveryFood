<?php
defined('BASEPATH') OR exit ('No se permite el acceso directo al script');

class Menu_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('dishesh', $formArray);
    }

    public function getMenu() {
        $result = $this->db->get('dishesh')->result_array();
        return $result;
    }

    public function getSingleDish($id) {
        $this->db->where('d_id', $id);
        $dish = $this->db->get('dishesh')->row_array();
        return $dish;
    }

    public function update($id, $formArray) {
        $this->db->where('d_id', $id);
        $this->db->update('dishesh', $formArray);
    } 

    public function delete($id) {
        $this->db->where('d_id',$id);
        $this->db->delete('dishesh');
    }

    public function countDish() {
        $query = $this->db->get('dishesh');
        return $query->num_rows();
    }

    public function getDishesh($id) {
        $this->db->where('r_id', $id);
        $dish = $this->db->get('dishesh')->result_array();
        return $dish;
    }
}
