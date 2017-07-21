<?php
defined('BASEPATH') OR exit('No direct script access allowed!');

/**
 *
 */
class Jabatan extends MX_Controller
{

    public function __construct()
    {

        if ($this->session->userdata('pengguna') === '' OR $this->session->userdata('pengguna') === null)
        {
            redirect(base_url());
        }else{
            parent::__construct();
            $this->page->use_directory();
            $this->load->model('model_jabatan');
        }
    }

    public function index()
    {

        $this->page->view('jabatan_index', array(
            'add' => $this->page->base_url('/add'),
            'grid' => $this->model_jabatan->get_jabatan()
        ));
    }

    private function form($action='insert', $id='')
    {
        $this->page->view('jabatan_form', array(
            'back' => $this->agent->referrer(),
            'action' => $this->page->base_url("/{$action}/{$id}"),
            'jabatan' => $this->model_jabatan->by_id_jabatan($id)
        ));
    }

    public function edit($id)
    {
        $this->form('update', $id);
    }

    public function update($id)
    {
        $data = array(
            'nama_jabatan' => $this->input->post('nama'),
            'keterangan' => $this->input->post('keterangan'));

        $this->db->where('id_jabatan', $id);
        $this->db->update('jabatan', $data);

        redirect($this->page->base_url());
    }

    public function add()
    {
        $this->form();
    }

    public function insert()
    {
        $data = array(
            'nama_jabatan' => $this->input->post('nama'),
            'keterangan' => $this->input->post('keterangan'));
        $this->db->insert('jabatan', $data);

        redirect($this->page->base_url());
    }
}
