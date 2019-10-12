<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Collection extends CI_Controller
{
    public function index()
    {
        $data['title']='My Collection';
        $this->load->view('collection', $data);
    }
}

/* End of file Collection.php */
