<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    public function index()
    {

        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('login/login');
        $this->load->view('template/footer');
    }
    public function login()
    {
        if ($this->session->userdata('user_pword')) {
            redirect(base_url()); // Redirect to base URL
        }       

        $this->form_validation->set_rules('username', 'Employee Number', 'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $login = $this->input->post('username');
            $result = $this->Login_model->login($login);

            if ($result) {
                $this->session->set_userdata('username', $result->username);
                $this->session->set_flashdata('msg', 'Please Enter Your Password to Continue');
                redirect(base_url('login/next'));
            } else {
                $this->session->set_flashdata('err', 'Username not found');
                redirect(base_url('login/index'));
            }
        } else {
            // Form validation failed, stay on the login page
            redirect(base_url('login/index'));
        }
    }

    public function next()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('pword', 'Password', 'required|trim');
        
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $pword = md5($this->input->post('pword'));

            $result = $this->Login_model->pword($username, $pword);

            if ($result)
            {
                $this->session->set_userdata('user_status', $result->status);
                $this->session->set_userdata('username', $result->username);
                $this->session->set_userdata('firstName', $result->firstName);
                $this->session->set_userdata('middleName', $result->middleName);
                $this->session->set_userdata('lastName', $result->lastName);
                $this->session->set_userdata('gender', $result->gender);
                $this->session->set_userdata('age', $result->age);
                $this->session->set_userdata('img', $result->img);
                $this->session->set_userdata('id', $result->id);

                $this->session->set_userdata('user_info', $result->username);
                $this->session->set_userdata('user_pword', $result->pword);
                $this->session->set_flashdata('msg', 'WELCOME USER');
                redirect(base_url('users/profile'));
            }
            else
            {
                $this->session->set_flashdata('err', 'Incorrect Employee Number or Password');

                echo 'error';
                die;
                redirect(base_url('login/index'));
            }
        }
        $this->load->view('template/header');
        $this->load->view('template/nav');
        $this->load->view('login/next');
        $this->load->view('template/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy(); // Destroy all session data
        redirect(base_url('login/login')); // Redirect to login page
    }
}