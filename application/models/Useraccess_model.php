<?php

class Useraccess_model extends CI_Model
{

    public function countData()
    {
        return $this->db->get('orang')->num_rows();
    }

    public function getAll()
    {
        $res = $this->db->query("SELECT * FROM orang");
        return $res->result_array();
    }

    public function getUser($limit, $start)
    {
        return $this->db->get('orang', $limit, $start)->result_array();
    }

    public function getDatabyId($id)
    {
        return $this->db->get_where('orang', ['id' => $id])->row_array();
    }

    public function tambah($data)
    {

        $this->db->insert('orang', $data);
    }

    public function hapus()
    {
        $id = htmlspecialchars($this->input->post('id', TRUE));
        $this->db->delete('orang', ['id' => $id]);
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id', true));
        $data = [
            'nik' => htmlspecialchars($this->input->post('nik', TRUE)),
            'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
            'alamat' => htmlspecialchars($this->input->post('alamat', TRUE)),
            'telp' => htmlspecialchars($this->input->post('tlp', TRUE)),
        ];
        $this->db->where('id', $id);
        $this->db->update('orang', $data);
    }
}
