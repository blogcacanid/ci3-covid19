<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Simple Tables';
        $data['sub_title'] = 'preview of simple tables';
        $this->load->view('tables/simple_tables', $data);
    }

    public function simple_tables()
    {
        $this->index();
    }

    public function data_tables()
    {
        $data['title'] = 'Data Tables';
        $data['sub_title'] = 'advanced tables';
        $this->load->view('tables/data_tables', $data);
    }
    
       
}
