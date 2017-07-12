<?php
defined('BASEPATH') OR exit('No direct access allowed!');

class Dashboard extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
         if ($this->session->has_userdata('pengguna'))
        {
            $this->page->view();
        }else
        {
            echo 'Silahkan Login Terlebih Dahulu!';
           redirect(site_url('index.php/site'));
        }
        
    }
}