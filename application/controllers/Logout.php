<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller{
	public function index()
	{
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('user_type');
		redirect(base_url());
	}
}
