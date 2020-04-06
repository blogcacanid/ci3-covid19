<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examples extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Invoice';
        $data['sub_title'] = '#007612';
        $this->load->view('examples/invoice', $data);
    }

    public function invoice()
    {
        $this->index();
    }

    public function invoice_print()
    {
        $data['title'] = 'Invoice';
        $data['sub_title'] = '#007612';
        $this->load->view('examples/invoice_print', $data);
    }

    public function profile()
    {
        $data['title'] = 'User Profile';
        $data['sub_title'] = '';
        $this->load->view('examples/profile', $data);
    }
    
    public function login()
    {
        $data['title'] = '';
        $data['sub_title'] = '';
        $this->load->view('examples/login', $data);
    }
    
    public function register()
    {
        $data['title'] = '';
        $data['sub_title'] = '';
        $this->load->view('examples/register', $data);
    }
    
    public function lockscreen()
    {
        $data['title'] = '';
        $data['sub_title'] = '';
        $this->load->view('examples/lockscreen', $data);
    }
    
    public function error_404()
    {
        $data['title'] = '404 Error Page';
        $data['sub_title'] = '';
        $this->load->view('examples/error_404', $data);
    }
    
    public function error_500()
    {
        $data['title'] = '500 Error Page';
        $data['sub_title'] = '';
        $this->load->view('examples/error_500', $data);
    }
    
    public function blank_page()
    {
        $data['title'] = 'Blank page';
        $data['sub_title'] = 'it all starts here';
        $this->load->view('examples/blank_page', $data);
    }
    
    public function pace_page()
    {
        $data['title'] = 'Pace page';
        $data['sub_title'] = 'Loading example';
        $this->load->view('examples/pace_page', $data);
    }
    
       
}
