<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('welcome');
        $this->load->view('footer');
    }
}

/* End of file About.php */
