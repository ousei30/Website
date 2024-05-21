<?php

//all codes written in CI_Controller will be given to dashboard
class Orders extends CI_Controller
{
    //this whole block of code is important to creating php files
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //place them in order
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('users/index');
        $this->load->view('template/footer');
        
    }

    //manabat
    public function add()
    {
        //place them in order
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('users/index');
        $this->load->view('template/footer');
        
    }
    
    //manabat
    public function edit($id)
    {
        //place them in order
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('users/index');
        $this->load->view('template/footer');
        
    }

    //manabat
    public function delete($id)
    {
        //place them in order
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('users/index');
        $this->load->view('template/footer');
        
    }
}

?>