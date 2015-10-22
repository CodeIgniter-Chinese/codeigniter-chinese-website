<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

    public function index()
    {
        $this->load->view('help/home_view');
    }

    public function legal()
    {
        $this->load->view('help/legal_view');
    }

    public function about()
    {
        $this->load->view('help/about_view');
    }
}
