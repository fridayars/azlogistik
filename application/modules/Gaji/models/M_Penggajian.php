<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Penggajian extends CI_Model
{
    function master_karyawan()
    {
        $query = $this->db->get("master_karyawan")->result_array();

        return $query;
    }

    function karyawan($id)
    {
        $query = $this->db->query("SELECT A.*, B.uang_kehadiran, B.gaji_pokok FROM master_karyawan A join master_golongan B ON A.golongan = B.golongan WHERE A.id = $id")->row_array();

        return $query;
    }

    function detailSlip($id)
    {
        $query = $this->db->query("SELECT A.*, B.nama_karyawan, B.nik, B.golongan FROM penggajian A join master_karyawan B ON A.master_karyawan_id = B.id WHERE A.id = $id")->row_array();

        return $query;
    }
}
