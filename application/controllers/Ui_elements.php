<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui_elements extends CI_Controller {

    public function index()
    {
        $data['title'] = 'General';
        $data['sub_title'] = 'Preview of UI elements';
        $this->load->view('ui_elements/general', $data);
    }

    public function general()
    {
        $this->index();
    }

    public function icons()
    {
        $data['title'] = 'Icons';
        $data['sub_title'] = 'a set of beautiful icons';
        $this->load->view('ui_elements/icons', $data);
    }
    
    public function buttons()
    {
        $data['title'] = 'Buttons';
        $data['sub_title'] = '';
        $this->load->view('ui_elements/buttons', $data);
    }
    
    public function sliders()
    {
        $data['title'] = 'Sliders';
        $data['sub_title'] = 'range sliders';
        $this->load->view('ui_elements/sliders', $data);
    }
    
    public function timeline()
    {
        $data['title'] = 'Timeline';
        $data['sub_title'] = 'example';
        $this->load->view('ui_elements/timeline', $data);
    }
    
    public function modals()
    {
        $data['title'] = 'Modals';
        $data['sub_title'] = 'new';
        $this->load->view('ui_elements/modals', $data);
    }
    
}
