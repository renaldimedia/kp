<?php
defined('BASEPATH') or exit('No direct access allowed!');

class Welcome extends MX_Controller 
{
    public function index()
    {
        $this->load->view('v_welcome');
    }
}
