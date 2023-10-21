<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gaji extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->model('M_Penggajian');
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['karyawans'] = $this->M_Penggajian->master_karyawan();
        
        $this->load->view("Master/container/header");
        $this->load->view("form", $data);
        $this->load->view("Master/container/footer");
    }

    public function penggajian()
    {
        $karyawan = $this->M_Penggajian->karyawan($_POST['master_karyawan_id']);
        
        if($_POST['jumlah_cuti'] > 0){
            $potongan_absen = 0;
        }else{
            $potongan_perhari = floor(round($karyawan['gaji_pokok']/22)/1000)*1000;
            $potongan_absen = $potongan_perhari*(22-$_POST['jumlah_kehadiran']); 
        }
        $uang_kehadiran = $karyawan['uang_kehadiran']*$_POST['jumlah_kehadiran'];
        $uang_lembur = (floor(round($karyawan['gaji_pokok']/22/8.5)/1000)*1000)*$_POST['jam_lembur'];
        
        $thp = $karyawan['gaji_pokok']+$uang_kehadiran+$uang_lembur-$potongan_absen;
        
        $dt_penggajian = array(
            'master_karyawan_id'    => $_POST['master_karyawan_id'],
            'gaji_pokok'            => $karyawan['gaji_pokok'],
            'jumlah_kehadiran'      => $_POST['jumlah_kehadiran'],
            'jumlah_cuti'           => $_POST['jumlah_cuti'],
            'jam_lembur'            => $_POST['jam_lembur'],
            'hasil_thp'             => $thp,
            'uang_kehadiran'        => $uang_kehadiran,
            'uang_lembur'           => $uang_lembur,
            'potongan_absen'        => $potongan_absen,
            'created_at'            => date("Y-m-d H:i:s"),
        );
        $this->db->insert("penggajian", $dt_penggajian);
        $insert_id = $this->db->insert_id();

        redirect('Gaji/slip/'.$insert_id);
    }

    public function slip($id)
    {
        $data['slip'] = $this->M_Penggajian->detailSlip($id);

        $this->load->view("slip", $data);
    }
}
