<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasional extends CI_Controller {

    public function index()
    {
        redirect('nasional/indonesia', 'refresh');
    }
        
    public function indonesia()
    {
        $data['title'] = 'Nasional';
        $data['sub_title'] = 'Indonesia';

        // Summary (Indonesia)
        $url = "https://api.kawalcorona.com/indonesia/";
        $response = file_get_contents($url);
        // var_dump($response);
        $objSum = json_decode($response, true);
        $data['recSum'] = $objSum;

        // Details (Indonesia)
        $url = "https://api.kawalcorona.com/indonesia/provinsi/";
        $response = file_get_contents($url);
        // var_dump($response);
        $objDetail = json_decode($response, true);
        $data['recDetails'] = $objDetail;

        $this->load->view('nasional/nasional',$data);
    }

    
}
