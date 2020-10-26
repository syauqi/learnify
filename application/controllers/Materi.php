<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('disqus');
        $this->load->model('m_materi');
        $this->list_materi['matematika_x'] = $this->m_materi->matematika_x()->result();
        $this->list_materi['matematika_xi'] = $this->m_materi->matematika_xi()->result();
        $this->list_materi['matematika_xii'] = $this->m_materi->matematika_xii()->result();
        $this->list_materi['ipa_x'] = $this->m_materi->ipa_x()->result();
        $this->list_materi['ipa_xi'] = $this->m_materi->ipa_xi()->result();
        $this->list_materi['ipa_xii'] = $this->m_materi->ipa_xii()->result();
        $this->list_materi['indo_x'] = $this->m_materi->indo_x()->result();
        $this->list_materi['indo_xi'] = $this->m_materi->indo_xi()->result();
        $this->list_materi['indo_xii'] = $this->m_materi->indo_xii()->result();
        $this->list_materi['inggris_x'] = $this->m_materi->inggris_x()->result();
        $this->list_materi['inggris_xi'] = $this->m_materi->inggris_xi()->result();
        $this->list_materi['inggris_xii'] = $this->m_materi->inggris_xii()->result();
        $this->list_materi['agama_x'] = $this->m_materi->agama_x()->result();
        $this->list_materi['agama_xi'] = $this->m_materi->agama_xi()->result();
        $this->list_materi['agama_xii'] = $this->m_materi->agama_xii()->result();
    }

    function generateMateri($materi){
    
        $data['materi'] = $this->list_materi[$materi];
        $data['user'] = $this->db->get_where('siswa', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('materi/'.str_replace('_', '-', $materi), $data);
        $this->load->view('template/footer');
    }

    public function belajar($id)
    {
        $where = array('id' => $id);
        $detail = $this->m_materi->belajar($id);
        $data['detail'] = $detail;
        $data['disqus'] = $this->disqus->get_html();
        $this->load->view('materi/belajar', $data);
    }

    public function matematika_x()
    {
        $this->generateMateri('matematika_x');
    }
    
    public function matematika_xi()
    {
        $this->generateMateri('matematika_xi');
    }

    public function matematika_xii()
    {
        $this->generateMateri('matematika_xii');
    }

    public function ipa_x()
    {
        $this->generateMateri('ipa_x');
    }

    public function ipa_xi()
    {
        $this->generateMateri('ipa_xi');
    }

    public function ipa_xii()
    {
        $this->generateMateri('ipa_xii');
    }

    public function indo_x()
    {
        $this->generateMateri('indo_x');
    }

    public function indo_xi()
    {
        $this->generateMateri('indo_xi');
    }

    public function indo_xii()
    {
        $this->generateMateri('indo_xii');
    }

    public function inggris_x()
    {
        $this->generateMateri('inggris_x');
    }
    
    public function inggris_xi()
    {
        $this->generateMateri('inggris_xi');
    }
    
    public function inggris_xii()
    {
        $this->generateMateri('inggris_xii');
    }
    
    public function agama_x()
    {
        $this->generateMateri('agama_x');
    }
    
    public function agama_xi()
    {
        $this->generateMateri('agama_xi');
    }
    
    public function agama_xii()
    {
        $this->generateMateri('agama_xii');
    }

}
