<?php
defined('BASEPATH') OR exit('No direct script access allowed!');
/**
 *
 */
class Jabatan extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->page->use_directory();
        $this->load->model('model_jabatan');
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
            'action' => $this->page->base_url("/{$action}/{$id}")
        ));
    }

    public function add()
    {
        $this->form();
    }

    public function insert()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'keterangan' => $this->input->post('keterangan'));
        $this->db->insert('jabatan', $data);

        redirect($this->page->base_url());
    }
}
