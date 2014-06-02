<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends MZ_Controller {


    public function index() {
        $this->load->view('site_view');
    }

}

