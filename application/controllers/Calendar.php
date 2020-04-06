<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Calendar';
        $data['sub_title'] = 'Control panel';
        $this->load->view('calendar/index', $data);
    }
 
}
