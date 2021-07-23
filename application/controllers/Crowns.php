<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crowns extends CI_Controller {

	public function index()
	{
		$this->load->view('crowns_view');
	}
}
