<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Stories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        // this loads the StoriesModel and creates a StoriesModel object
        $this->load->model('StoriesModel');
    }

    public function index() {
        
        /* this next line is a hack to solve the contactjs problem explained
         * in the instructions. find a better way to solve this. in the mean
         * time if you uncomment this line it will at least allow you to load
         * the page without an error.*/
        $data['contactjs'] = "";
        $data['contactcss'] = "";
        $data['APIjs'] = "";
        /*
         * this next line will retrieve the stories from the database. it is
         * commented out because you have to write the method in the model first.
         */
        $stories = $this->StoriesModel->getStories();
        
        /* when you get that method working, you can uncomment this line to dump
         * the results to the browser. it will be an associative array with all
         * information you need to build your stories page. but it will be raw data
         * you will need to parse and put through templates to send to the page
         * this is just a debug line. do not leave it in your finished code.
         */
        /*for($i = 0; $i < count($stories); $i++){

            print_r($stories[$i]['title']);
            print_r($stories[$i]['id']);

        }*/


        /*
         * THIS IS THE HARD PART
         * Now that you have an array full of data you want to display,
         * you have to figure what to do with it. You can't display it as is.
         * The solution is templates (using the CI parser). You have all the raw
         * data in the $stories array. Make template(s) to send the data and get
         * back well formed HTML which you put into the $data[] associative array.
         * Then you send the $data array to the page below. There are many ways to
         * do this, but the idea is always the same. Do something like this...
         * 
         * $data['somekey'] = $this->parser->parse('templates/sometemplate', [stories data], TRUE);
         * 
         * Where 'somekey' is how you will access the filled template in the page below.
         * 'sometemplate' is the template you want to fill with stories data
         * [stories data] is the data you want to send to the template to fill it in.
         *     that's not syntactically correct, it's just a concept, you have to figure
         *     out how to build the [stories data] array and send it.
         * 
         * you will need to read this https://codeigniter.com/userguide3/libraries/parser.html
         * 
         * there are 5 stories in the database, but you cannot count on that! you have to make
         * a general solution that will work if the number of stories change
         */

        $temp = '';
        for($i = 0; $i < count($stories); $i++){
            if($stories[$i]['type']== '1') {
                //Important Story
                $temp .= $this->parser->parse('templates/storiestemplateimportant', $stories[$i], TRUE);
            }
            else{

                $temp .= $this->parser->parse('templates/storiestemplate', $stories[$i], TRUE);
            }
        }
        $data['pagetitle'] = 'Stories';
        $data['storytime'] = $temp;
        $data['storiescss'] = $this->parser->parse('templates/storiescss',[],TRUE);

        $this->load->view('templates/header',$data);
        $this->load->view('pages/stories', $data); // <-- you need to make this page!
        $this->load->view('templates/footer', $data);
    }

}
