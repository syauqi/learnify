<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function belajar($id)
    {
        $this->load->model('m_materi');
        $where = array('id' => $id);
        $detail = $this->m_materi->belajar($id);
        $data['detail'] = $detail;
        $this->load->view('materi/belajar', $data);
    }

    public function matematika_x()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->matematika_x()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/matematika-x', $data);
        $this->load->view('template/footer');
    }

    public function matematika_xi()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->matematika_xi()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/matematika-xi', $data);
        $this->load->view('template/footer');
    }

    public function matematika_xii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->matematika_xii()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/matematika-xii', $data);
        $this->load->view('template/footer');
    }

    public function ipa_x()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->ipa_x()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/ipa-x', $data);
        $this->load->view('template/footer');
    }

    public function ipa_xi()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->ipa_xi()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/ipa-xi', $data);
        $this->load->view('template/footer');
    }

    public function ipa_xii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->ipa_xii()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/ipa-xii', $data);
        $this->load->view('template/footer');
    }

    public function indo_x()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->indo_x()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/indo-x', $data);
        $this->load->view('template/footer');
    }

    public function indo_xi()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->indo_xi()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/indo-xi', $data);
        $this->load->view('template/footer');
    }

    public function indo_xii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->indo_xii()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/indo-xii', $data);
        $this->load->view('template/footer');
    }

    public function inggris_x()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->inggris_x()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/inggris-x', $data);
        $this->load->view('template/footer');
    }

    public function inggris_xi()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->inggris_xi()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/inggris-xi', $data);
        $this->load->view('template/footer');
    }

    public function inggris_xii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->inggris_xii()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/inggris-xii', $data);
        $this->load->view('template/footer');
    }

    public function agama_x()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->agama_x()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/agama-x', $data);
        $this->load->view('template/footer');
    }

    public function agama_xi()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->agama_xi()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/agama-xi', $data);
        $this->load->view('template/footer');
    }

    public function agama_xii()
    {
        $this->load->model('m_materi');
        $data['materi'] = $this->m_materi->agama_xii()->result();
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/agama-xii', $data);
        $this->load->view('template/footer');
    }
}