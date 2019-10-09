<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $data['title']='Contact';
        
		$this->load->view('header');
		$this->load->view('sidebar');
        $this->load->view('navbar',$data);
		$this->load->view('contact',$data);
		$this->load->view('footer');
    }

}

/* End of file Contact.php */
