<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Useraccess extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Useraccess_model');
    }

    public function index()
    {
        $data['judul'] = 'User Page';
        $data['sidename'] = 'Administrator';
        $data['user'] = $this->Useraccess_model->getAll();
        $data['users'] = $this->Useraccess_model->getUser(5, 6);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('user-access/index', $data);
        $this->load->view('templates/footer');

        $this->load->library('pagination');
        $config['base_url'] = 'https://localhost/siab-ci/useraccess/index';
        $config['total_rows'] = $this->Useraccess_model->countData();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);



        // var_dump($config['total_rows']);
        // die;
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nik',
            'Nomor Induk',
            'required|min_length[4]|is_unique[orang.nik]',
            [
                'required' => 'Nomor Induk harus diisi',
                'min_length' => 'Minimal 4 karakter',
                'is_unique' => 'Nomor Induk Sudah ada'
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            [
                'required' => 'Alamat Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tlp',
            'Telephone',
            'required',
            [
                'required' => 'Telephone Harus diisi'
            ]
        );

        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Home Page';
            $data['sidename'] = 'Administrator';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('user-access/tambah');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nik' => htmlspecialchars($this->input->post('nik', TRUE)),
                'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
                'alamat' => htmlspecialchars($this->input->post('alamat', TRUE)),
                'telp' => htmlspecialchars($this->input->post('tlp', TRUE)),
            ];
            //$this->User_access_model->tambah($data);
            $this->Useraccess_model->tambah($data);
            $this->session->set_flashdata('useraccess', 'Ditambah');
            redirect('useraccess');
        }
    }

    public function hapus($id = NULL)
    {

        $this->form_validation->set_rules('id', 'User', 'required');

        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Home Page';
            $data['sidename'] = 'Administrator';
            $data['id'] = $id;
            $data['users'] = $this->Useraccess_model->getDatabyId($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('user-access/hapus', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Useraccess_model->hapus();
            $this->session->set_flashdata('useraccess', 'Dihapus');
            redirect('useraccess');
        }
    }

    public function ubah($id = NULL)
    {
        $this->form_validation->set_rules(
            'nik',
            'Nomor Induk',
            'required|min_length[4]',
            [
                'required' => 'Nomor Induk harus diisi',
                'min_length' => 'Minimal 4 karakter'
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Nama Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            [
                'required' => 'Alamat Harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tlp',
            'Telephone',
            'required',
            [
                'required' => 'Telephone Harus diisi'
            ]
        );


        if ($this->form_validation->run() == FALSE) {

            $data['judul'] = 'Home Page';
            $data['sidename'] = 'Administrator';
            $data['id'] = $id;
            $data['users'] = $this->Useraccess_model->getDatabyId($id);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('user-access/ubah', $data);
            $this->load->view('templates/footer');
        } else {

            //$this->User_access_model->tambah($data);
            $this->Useraccess_model->ubah();
            $this->session->set_flashdata('useraccess', 'Diubah');
            redirect('useraccess');
        }
    }
}
