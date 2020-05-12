<?php
class Pages extends CI_Controller{

    public function view($page = 'home')
    {
        if(! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }


        if($page == 'contact'){
            $data['contactjs'] = $this->parser->parse('templates/contact',[],TRUE);
            $data['contactcss'] =$this->parser->parse('templates/contactcss',[],TRUE);

        } else {
            $data['contactjs'] = "";
            $data['contactcss'] = "";

        }

        if($page == 'API'){
            $data['APIjs'] = $this->parser->parse('templates/APIJS',[],TRUE);
        } else{
            $data['APIjs'] = "";
        }

        $data['storiescss'] = "";


        $data['pagetitle'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);


    }
}
