<?php
if (!defined('BASEPATH')) exit ('no direct script access allowed');

class Review_Controller extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Review_Model');
    }

    public function review($slug)
    {
        // get review data  from based upon slug
        $data['gameReview'] = $this->Review_Model->getReviewData($slug);

        $data['bodyContent'] = 'review';
        $data['page'] = 'review';
        $this->load->view('template', $data);
    }

    public function setComment()
    {

        $comment = $this->input->post();

        print_r($comment);

        // send comment data to review model
        $this->Review_Model->attemptPostComment($comment);

    }

}
