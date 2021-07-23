<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fillings extends CI_Controller {

	public function index()
	{
		$this->load->view('fillings_view');
	}
}
