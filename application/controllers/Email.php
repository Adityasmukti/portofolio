<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function index()
    {
        
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('welcome');
		$this->load->view('footer');
    }

}

/* End of file Email.php */
