<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jquery extends MX_Controller {
	public function index()
	{
		$this->output->set_content_type('application/javascript');
		
		$location = $this->input->get('location') ? $this->input->get('location') : 'cdn';
		$this->load->view('load', 
			array('location'=>$location)
		);
	}//index
}

/* End of file jquery.php */
/* Location: ./application/controllers/jquery.php */