<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('homepage');
        $this->load->view('templates/footer');
    }
}
