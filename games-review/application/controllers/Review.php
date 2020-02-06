<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Review extends CI_Controller
{

    public function __construct()
    {
        $this->load->model('Review');
    }

    public function getReview($slug)
    {
        $this->HomeModel->getReview($slug);
    }
}