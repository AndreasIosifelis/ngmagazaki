<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends MZ_Controller {


    public function index() {
        $this->load->view('site_view');
    }
    
    
    public function page()
    {
        $this->load->model("Site_model");
        $input = $this->request();
        $response["json"] = $input;               
        $response["success"] = true;       
        $response["page"] = $this->Site_model->getPage($input->page);        
        $this->response($response);      
                
    }

}

