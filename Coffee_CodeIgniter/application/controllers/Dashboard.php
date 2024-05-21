<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
    }

    public function index()
    {
        $this->load->model('Users_model');
        $data['users'] = $this->Users_model->rows();

        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('dashboard/index');
        $this->load->view('template/footer');    
    }
    public function about()
    {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('webpages/about');
        $this->load->view('template/footer');    
    }
    public function cart()
    {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('webpages/addtocart');
        $this->load->view('template/footer'); 
    }
    public function feedback()
    {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('webpages/feedback');
        $this->load->view('template/footer'); 
    }
    public function contact()
    {
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('webpages/contact');
        $this->load->view('template/footer'); 
    }
}

?>