<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

    public function index()
    {
        $this->load->view('community/home_view');
    }
}
