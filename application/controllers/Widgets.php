<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widgets extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Widgets';
        $data['sub_title'] = 'Preview page';
        $this->load->view('widgets/index', $data);
    }
 
}
