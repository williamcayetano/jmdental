<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sealants extends CI_Controller {

	public function index()
	{
		$this->load->view('sealants_view');
	}
}
