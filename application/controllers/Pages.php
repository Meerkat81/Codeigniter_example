<?php
class Pages extends CI_Controller{

    public function view($page = 'home')
    {
        if(! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $this->load->library('parser');

        if($page == 'contact'){
            $data['contactjs'] = $this->parser->parse('templates/contact',[],TRUE);
            $data['contactcss'] =$this->parser->parse('templates/contactcss',[],TRUE);
        } else {
            $data['contactjs'] = "";
        }

        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);


    }
}
