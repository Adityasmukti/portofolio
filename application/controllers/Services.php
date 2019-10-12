<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index()
    {
        $data['title']='My Service';
		$this->load->view('services');
    }

}

/* End of file Services.php */
