<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MZ_Controller {

    public function login() {
        
        //$response["json"] = $this->request();
        $response["username"] = $this->request()->username;
        $response["password"] = $this->request()->password;
       
        
        $this->response($response);
        
    }

}
