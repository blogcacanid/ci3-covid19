<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internasional extends CI_Controller {

    public function index()
    {
        redirect('internasional/dunia', 'refresh');
    }
        
    public function dunia()
    {
        $data['title'] = 'Internasional';
        $data['sub_title'] = 'Dunia';

        // Internasional (Positif)
        $url = "https://api.kawalcorona.com/positif";
        $response = file_get_contents($url);
        //var_dump($response);
        $objSum = json_decode($response, true);
        $data['recSumPositif'] = $objSum;

        // Internasional (Sembuh)
        $url = "https://api.kawalcorona.com/sembuh";
        $response = file_get_contents($url);
        //var_dump($response);
        $objSum = json_decode($response, true);
        $data['recSumSembuh'] = $objSum;

        // Internasional (Meninggal)
        $url = "https://api.kawalcorona.com/meninggal";
        $response = file_get_contents($url);
        //var_dump($response);
        $objSum = json_decode($response, true);
        $data['recSumMeninggal'] = $objSum;

        // Details (Dunia)
        $url = "https://api.kawalcorona.com/";
        $response = file_get_contents($url);
        // var_dump($response);
        $objDetail = json_decode($response, true);
        $data['recDetails'] = $objDetail;

        $this->load->view('internasional/internasional',$data);
    }

    
}
