<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

    public function index()
    {
        $data['title'] = 'General Form Elements';
        $data['sub_title'] = 'Preview';
        $this->load->view('forms/general_elements', $data);
    }

    public function general_elements()
    {
        $this->index();
    }

    public function advanced_elements()
    {
        $data['title'] = 'Advanced Form Elements';
        $data['sub_title'] = 'Preview';
        $this->load->view('forms/advanced_elements', $data);
    }
    
    public function editors()
    {
        $data['title'] = 'Text Editors';
        $data['sub_title'] = 'Advanced form element';
        $this->load->view('forms/editors', $data);
    }
       
}
