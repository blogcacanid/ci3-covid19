<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Mailbox';
        $data['sub_title'] = '13 new messages';
        $this->load->view('mailbox/inbox', $data);
    }

    public function inbox()
    {
        $this->index();
    }

    public function compose()
    {
        $data['title'] = 'Mailbox';
        $data['sub_title'] = '13 new messages';
        $this->load->view('mailbox/compose', $data);
    }
    
    public function read()
    {
        $data['title'] = 'Read Mail';
        $data['sub_title'] = '';
        $this->load->view('mailbox/read', $data);
    }
       
}
