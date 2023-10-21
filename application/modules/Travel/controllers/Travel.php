<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Travel extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $this->load->view("landing_page");
    }
}
