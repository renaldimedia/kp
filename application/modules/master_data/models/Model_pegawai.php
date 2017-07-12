<?php
    defined('BASEPATH') OR exit('No direct script access allowed!');
    /**
     *  model untuk Pegawai
     */
    class Model_pegawai extends CI_Model
    {

        function __construct()
        {
            # code...
            parent::__construct();
        }
    /**
    *   function untuk mengolah data pegawai, dengan jabatannya
    */
        public function get_pegawai()
        {
            //query dari 3 tabel, pegawai, jabatan pegawai dan pegawai
            $query = "SELECT p.*, jp.*, j.* FROM pegawai AS p
                        LEFT JOIN jabatan_pegawai AS jp ON p.id = jp.id_pegawai
                        INNER JOIN jabatan AS j ON j.id_jabatan = jp.id_jabatan
                        ORDER BY p.id";

            return $this->db->query($query)->result();
        }

        public function by_id_jabatan($id)
        {
            $query = "SELECT p.*, jp.*, j.* FROM pegawai AS p
                        LEFT JOIN jabatan_pegawai AS jp ON p.id = jp.id_pegawai
                        INNER JOIN jabatan AS j ON j.id_jabatan = jp.id_jabatan
                        WHERE jp.id_jabatan = $id";
            $data = $this->db->query($query)->result();
            return $data->num_rows() > 0 ? $data->row() : $this;
        }

        public function by_id_pegawai($id)
        {
            $query = "SELECT p.*, jp.*, j.* FROM pegawai AS p
                        LEFT JOIN jabatan_pegawai AS jp ON p.id = jp.id_pegawai
                        INNER JOIN jabatan AS j ON j.id_jabatan = jp.id_jabatan
                        WHERE p.id = $id";
            $data = $this->db->query($query)->result();
            return $data->num_rows() > 0 ? $data->row() : $this;
        }
    }
