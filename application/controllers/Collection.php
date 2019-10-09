<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collection extends CI_Controller
{
    public function index()
    {
        $data['title']='My Collection';
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('navbar', $data);
        $this->load->view('collection', $data);
        $this->load->view('footer');
    }
}

/* End of file Collection.php */
