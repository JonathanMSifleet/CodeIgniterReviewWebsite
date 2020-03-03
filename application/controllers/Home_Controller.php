<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('url_helper');
		$this->load->helper('html');

		// Load in your Models below.
		$this->load->model('Home_Model');

	}

	public function index() {
		//Load data required for web page in array.

		$data['title'] = 'Games Reviews';

		// Get the data from our Home Model.
		$data['result'] = $this->Home_Model->getGame("");

		//Load the view and send the data across.
		$data['bodyContent'] = 'home';
		$data['page'] = "home";
		$this->load->view('template', $data);

	}

	public function searchReview($gameName) {

		// get search term
		$gameName = $this->input->post('searchTerm');

		//Load data required for web page in array.
		$data['title'] = 'Games Reviews';

		// Get the data from our Home Model.
		$data['result'] = $this->Home_Model->getGame($gameName);

		//Load the view and send the data across.
		$data['bodyContent'] = 'home';
		$data['page'] = 'home';
		$this->load->view('template', $data);
	}

}
