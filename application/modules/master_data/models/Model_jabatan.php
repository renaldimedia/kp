<?php
    defined('BASEPATH') OR exit('No direct script access allowed!');
    /**
     *  model untuk Jabatan
     */
    class Model_jabatan extends CI_Model
    {
        public $nama =  '';
        public $keterangan = '';

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

        public function by_id_jabatan($id)
        {
            $datasrc = $this->db->get_where('jabatan', array('id_jabatan' => $id));
            return $datasrc->num_rows() > 0 ? $datasrc->row() : $this;
        }
    }
