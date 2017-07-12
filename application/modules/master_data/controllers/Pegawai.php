<?php
defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 *
 */
class Pegawai extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->page->use_directory();
        $this->load->model('model_pegawai');
    }
// baca data pegawai
    public function index()
    {
        $this->page->view('pegawai_index', array(
            'add' => $this->page->base_url('/add'),
            'grid' => $this->model_pegawai->get_pegawai(),
        ));
    }

    private function form($action='insert', $id='')
    {
        $this->page->view('pegawai_form', array(
            'back' => $this->agent->referrer(),
            'action' => $this->page->base_url("/{$action}/{$id}"),
            'pegawai' => $this->model_jabatan->by_id_pegawai($id)
        ));
    }

    public function edit($id)
    {
        $this->form('update', $id);
    }

    public function update_biodata_pegawai($id)
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenkel' => $this->input->post('jenkel'),);

        $this->db->where('id', $id);
        $this->db->update('pegawai', $data);

        redirect($this->page->base_url());
    }

    public function add()
    {
        $this->form();
    }

    public function insert()
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenkel' => $this->input->post('jenkel'),);
        $this->db->insert('pegawai', $data);

        redirect($this->page->base_url());
    }
}
