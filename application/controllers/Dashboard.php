<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['sub_title'] = 'Version 1.0';
        $this->load->view('dashboard/v1', $data);
    }

    public function v1()
    {
        $this->index();
    }

    public function v2()
    {
        $data['title'] = 'Dashboard';
        $data['sub_title'] = 'Version 2.0';
        $this->load->view('dashboard/v2', $data);
    }
    
}
