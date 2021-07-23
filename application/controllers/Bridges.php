<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bridges extends CI_Controller {

	public function index()
	{
		$this->load->view('bridges_view');
	}
}
