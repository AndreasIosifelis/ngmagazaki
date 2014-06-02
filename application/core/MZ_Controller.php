<?php

class MZ_Controller extends CI_Controller {

    public function request() {       
        return json_decode(file_get_contents("php://input"));
    }

    public function response($response) {
        $this->output->set_header("x-frame-origin:SAMEORIGIN");
        $this->output->set_content_type("application/json");
        echo json_encode($response);
    }

}
