<?php
class Mahasiswa_model extends CI_Model
{
   
    public function lihat_data()
    {
        $this->db->join('prodi', 'prodi.id_prodi = mahasiswa.id_prodi', 'left');
        return $this->db->get('mahasiswa')->result();
    }

    function get_prodi()
    {
        return $this->db->get('prodi')->result();
    }

    function insert_data($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function get_row($id)
    {
        return $this->db->where('id_mahasiswa', $id)->get('mahasiswa');
    }

    public function update_data($id, $data)
    {
        return $this->db->where('id_mahasiswa', $id)->update('mahasiswa', $data);
    }

    public function delete_data($id)
    {
        return $this->db->where('id_mahasiswa', $id)->delete('mahasiswa');
    }

    function metodeResult()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }

    function metodeRow()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }

    function metodeResultArray()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    function metodeRowArray()
    {
        $query = $this->db->where('id_mahasiswa', 1);
        $query = $this->db->get('mahasiswa');
        return $query->row();
    }
}