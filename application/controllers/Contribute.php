<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contribute extends CI_Controller {

    public function index()
    {
        $this->load->view('contribute/home_view');
    }
}
