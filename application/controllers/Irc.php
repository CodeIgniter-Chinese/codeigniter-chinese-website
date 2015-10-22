<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Irc extends CI_Controller {

    public function index()
    {
        $this->load->view('irc/home_view');
    }
}
