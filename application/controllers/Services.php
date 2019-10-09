<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index()
    {
        $data['title']='My Service';
		$this->load->view('header');
		$this->load->view('sidebar');
        $this->load->view('navbar',$data);
		$this->load->view('welcome');
		$this->load->view('footer');
    }

}

/* End of file Services.php */
