<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docs extends CI_Controller {

    public function index()
    {
        $this->load->view('docs/home_view');
    }
}
