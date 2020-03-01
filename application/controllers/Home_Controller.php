<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Consider if it would be best to autoload some of the helpers from here.
		$this->load->helper('url');
		$this->load->helper('url_helper');
		$this->load->helper('html');
		$this->load->helper('cookie');

		// Load in your Models below.
		$this->load->model('Home_Model');

	}

	public function index() {
		//Load data required for web page in array.

		// Change this to whatever title you wish.
		$data['title'] = 'Games Reviews';

		// Get the data from our Home Model.
		$data['result'] = $this->Home_Model->getGame("");

		//Load the view and send the data across.
		$data['bodyContent'] = 'home';
		$this->load->view('template', $data);
	}

	public function searchReview($gameName) {

		$gameName = $this->input->post('searchTerm');

		//Load data required for web page in array.

		// Change this to whatever title you wish.
		$data['title'] = 'Games Reviews';

		// Get the data from our Home Model.
		$data['result'] = $this->Home_Model->getGame($gameName);

		//Load the view and send the data across.
		$this->load->view('home', $data);
	}

	public function review($slug = NULL) {
		//Get the data from the model based on the slug we have.
		//Slugs match on to the knowledge around wildcard routes.
		//More information on slugs can be found here: https://codeigniter.com/user_guide/tutorial/news_section.html

	}

}
