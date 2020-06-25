<?php

class M_guru extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('guru');
    }

    public function detail_guru($nip = null)
    {
        $query = $this->db->get_where('guru', array('nip' => $nip))->row();
        return $query;
    }

    public function delete_guru($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_guru($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
