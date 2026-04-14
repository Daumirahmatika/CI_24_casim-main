<?php
class Anggota_model extends CI_Model {

    private $table = 'anggota';

    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($id) {
        $this->db->where('no_anggota', $id);
        return $this->db->get($this->table)->row();
    }

    public function update($id, $data) {
        $this->db->where('no_anggota', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id) {
        $this->db->where('no_anggota', $id);
        return $this->db->delete($this->table);
    }
}