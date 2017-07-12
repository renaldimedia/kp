<?php
    defined('BASEPATH') OR exit('No direct script access allowed!');
    /**
     *  model untuk Jabatan
     */
    class Model_jabatan extends CI_Model
    {

        function __construct()
        {
            # code...
            parent::__construct();
        }

        public function get_jabatan()
        {
            $query = "SELECT * FROM jabatan ORDER BY id_jabatan DESC";
            return $this->db->query($query)->result();
        }
    }
