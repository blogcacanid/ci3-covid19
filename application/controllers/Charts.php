<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function index()
    {
        $data['title'] = 'ChartJS';
        $data['sub_title'] = 'Preview sample';
        $this->load->view('charts/chartjs', $data);
    }

    public function chartjs()
    {
        $this->index();
    }

    public function morris()
    {
        $data['title'] = 'Moris';
        $data['sub_title'] = 'Preview sample';
        $this->load->view('charts/morris', $data);
    }
    
    public function flot()
    {
        $data['title'] = 'Flot';
        $data['sub_title'] = 'Preview sample';
        $this->load->view('charts/flot', $data);
    }
    
    public function inline_charts()
    {
        $data['title'] = 'Inline Charts';
        $data['sub_title'] = 'multiple types of charts';
        $this->load->view('charts/inline_charts', $data);
    }
    
}
