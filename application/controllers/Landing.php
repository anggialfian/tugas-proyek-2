<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function index()
	{
        // $data['title'] = 'Dashboard';
        // $data['menu'] = 'dashboard';
        $data = [
            'title' => 'AR.EO',
            'menu' => 'dashboard'
        ];

		$this->load->view('landing/index', $data);
	}
}
