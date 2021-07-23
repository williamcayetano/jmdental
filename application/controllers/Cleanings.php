<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cleanings extends CI_Controller {

	public function index()
	{
		$this->load->view('cleanings_view');
	}
}
