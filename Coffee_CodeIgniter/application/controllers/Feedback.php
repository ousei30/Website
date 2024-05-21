<?php
    class Feedback extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Feedback_model');
            $this->load->model('Users_model');
            // if (!$this->session->userdata('emp_number')) {
            //     redirect(base_url('login/index')); // Redirect to login page
            // }
        }
        public function feedback()
        {
            $data['feedback'] = $this->Feedback_model->rows();
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('feedback/feedback', $data);
            $this->load->view('template/footer');
        }
        public function addfeedback()
        {
            $this->form_validation->set_rules('feedback','feedback', 'trim|required');
            $this->form_validation->set_rules('emp_number','feedback', 'trim|required');
            $this->form_validation->set_rules('img','feedback', 'trim|required');

            if ($this->form_validation->run())
            {
                $data = array(
                    'feedback'    => $this->input->post('feedback'),
                    'emp_number'    => $this->input->post('emp_number'),
                    'img'    => $this->input->post('img'),

                    'date_created'  => date('Y-m-d')
                );
                $result=$this->Feedback_model->add($data);
                if($result)
                {
                    $this->session->set_flashdata('success','Employee Succesfully Created!');
                    redirect(base_url('feedback/feedback'));
                }
                else
                {
                    $this->session->set_flashdata('err', 'Employee Registration Failed');
                }
            }
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('pages/addfeedback');
            $this->load->view('template/footer');
        }
    }
?>