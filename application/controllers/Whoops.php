<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whoops extends CI_Controller {

	public function index()
	{
		$this->load->view('whoops_view');
	}
}
