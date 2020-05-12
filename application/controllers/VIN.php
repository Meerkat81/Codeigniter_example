<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if(!$this->input->is_ajax_request()){
            die("error");
        }
    }

    private function vinRequest(){
        $client = new http\Client;
        $request = new http\Client\Request;

        $request->setRequestUrl('https://vindecoder.p.rapidapi.com/decode_vin');
        $request->setRequestMethod('GET');
        $request->setQuery(new http\QueryString(array(
            'vin' => '4F2YU09161KM33122'
        )));

        $request->setHeaders(array(
            'x-rapidapi-host' => 'vindecoder.p.rapidapi.com',
            'x-rapidapi-key' => '80e49e915bmsh55524ca6d63f3f7p121460jsnc85a346bb98a'
        ));

        $client->enqueue($request)->send();
        $response = $client->getResponse();

        echo $response->getBody();
    }

}