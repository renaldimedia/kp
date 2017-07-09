<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
        if ($this->session->has_userdata('pengguna'))
        {
            redirect(site_url('index.php/dashboard'));
        }else
        {
            $this->page->template('login_tpl');
            $this->page->view();
        }
		
	}
    public function login()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        //$password = password($pass);
        $src = $this->db->get_where('user', array('username' => $username, 'password' => $pass));
        
        if($src->num_rows() === 0)
        {
            $this->session->set_flashdata('status', 'failed');
            redirect(base_url());
        }else {
            $pengguna = $src->row();
            $this->session->set_userdata('pengguna', $pengguna);
            redirect(site_url('index.php/dashboard'));
        }

    }

    public function logout()
    {
        //ahiri sesi login
        $this->session->sess_destroy();
        //kembali ke halaman login / utama
        redirect(base_url());
    }
}
