<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $details = array(
            'header' => array(
                'title' => "Noriel Jon's Portfolio",
                'css' => array('home.css'),
            ),
            'body' => 'home/body.php'
        );
        $this->load->view('template/master', $details);
	}
}
