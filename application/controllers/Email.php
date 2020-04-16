<?php

/*
 * Your comment header here.
 */


// this protects your controllers from direct access
defined('BASEPATH') OR exit('Forbidden');

class Email extends CI_Controller {

    public function __construct() {
        // this is the constructor for the Email class
        // the next line says to inherit the CI_controller constructor
        parent::__construct();

        /*
         * This controller should only accept AJAX requests
         * Putting this in the controller constructor protects
         * against non-AJAX connections
         */
        if(!$this->input->is_ajax_request()){
            die("error");
        }
    }

    private function mymail(){
        // dummy function to simulate calling a real mail() function
        // leave this as-is
        return true;
    }

    public function send() {
        /* uncomment this next line to see if you're getting
         * the post vars correctly */
        //var_dump($this->input->post());

        /*
         * Remove the code below and complete the controller here.
         */

        if($this->mymail()){
            echo "okay";
        } else {
            echo "error";
        }

    }
}
