<?php

class M_siswa extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('siswa');
    }

    public function detail_siswa($id = null)
    {
        $query = $this->db->get_where('siswa', array('id' => $id))->row();
        return $query;
    }

    public function delete_siswa($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_siswa($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
