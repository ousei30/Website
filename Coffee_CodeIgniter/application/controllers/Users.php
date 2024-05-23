<?php
    class Users extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Users_model');
            $this->load->model('Login_model');
            $this->load->model('Upload_model');
            $this->load->model('Orders_model');
        }
        public function profile()
        {
            $data['orders'] = $this->Orders_model->rows1();
            if ($this->session->userdata('user_status') == 1) {
                $this->load->view('template/header');
                $this->load->view('template/nav');
                $this->load->view('webpages/adminprofile',$data);
                $this->load->view('template/footer');
            } else {
                $this->load->view('template/header');
                $this->load->view('template/nav');
                $this->load->view('webpages/profile',$data);
                $this->load->view('template/footer');
            }
        }
        public function home()
        {
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('pages/home');
            $this->load->view('template/footer');
        }
        public function index()
        {
            if (!$this->session->userdata('username')) {
                redirect(base_url('login/index'));
            }

            if ($this->session->userdata('user_status') != 1) {
                redirect(base_url('login/index'));
            }

            $data['users'] = $this->Users_model->rows();
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('users/index', $data);

            $this->load->view('template/footer');

        }
        public function add()
        {
            $this->form_validation->set_rules('username','Employeree Number', 'trim|required');
            $this->form_validation->set_rules('pword','Employee Status', 'trim|required');

            $this->form_validation->set_rules('firstName','First Name', 'trim|required');
            $this->form_validation->set_rules('middleName','Middle Name', 'trim|required');
            $this->form_validation->set_rules('lastName',' Last Name', 'trim|required');
            $this->form_validation->set_rules('gender','Gender', 'trim|required');
            $this->form_validation->set_rules('age','Age', 'trim|required');
            
            $upload = $this->Upload_model->upload();

            if (is_array($upload))
            {
                if ($this->form_validation->run())
                {
                    $data = array(
                        'username'      => $this->input->post('username'),
                        'pword'         => md5($this->input->post('pword')),
    
                        'firstName'     => $this->input->post('firstName'),
                        'middleName'    => $this->input->post('middleName'),
                        'lastName'      => $this->input->post('lastName'),
                        'gender'        => $this->input->post('gender'),
                        'age'           => $this->input->post('age'),
    
                        'img'           => $upload['file_name'],
                        'location'      => $upload['file_path'],
    
                        'created'       => 'users',
                        'date_created'  => date('Y-m-d')
                    );
                    $result=$this->Users_model->add($data);
                    if($result)
                    {
                        $this->session->set_flashdata('success','Employee Succesfully Created!');
                        redirect(base_url('users/index'));
                    }
                    else
                    {
                        $this->session->set_flashdata('err', 'Employee Registration Failed');
                    }
                }
            }

            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('users/add');
            $this->load->view('template/footer');
        }
        public function display($id)
        {   
            $data['user'] = $this->Users_model->row($id);
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('users/edit', $data); // Pass $data to the view
            $this->load->view('template/footer');
        }
        public function update()
        {
            // Set validation rules
            $this->form_validation->set_rules('username', 'Employee Number', 'trim|required');
            $this->form_validation->set_rules('firstName', 'first name', 'trim|required');
            $this->form_validation->set_rules('lastName', 'last name', 'trim|required');
            $this->form_validation->set_rules('middleName', 'middle name', 'trim|required');
        
            if ($this->form_validation->run()) {
                
                $id = $this->input->post('id');
            
                $data = array(
                    'username'      => $this->input->post('username'),
                    'firstName'     => $this->input->post('firstName'),
                    'middleName'    => $this->input->post('middleName'),
                    'lastName'      => $this->input->post('lastName'),
                    'update'        => 'users',
                    'date_updated'  => date('Y-m-d') // Update the date
                );
            
                $result = $this->Users_model->update($id, $data);
            
                if ($result) {
                    $this->session->set_flashdata('success', 'Employee Successfully Updated!');
                    redirect(base_url('users/index'));
                } else {
                    $this->session->set_flashdata('err', 'Employee Update Failed');
                }
            } else {
                $this->session->set_flashdata('err', validation_errors());
                redirect(base_url('users/edit/' . $this->input->post('id')));
            }
        }

        public function delete($id)
        {
            $data = array(
                'is_deleted' => 1,
                'deleted'       => 'deleted',
                'date_deleted' => date('Y-m-d') // Update the date
            );

            $result = $this->Users_model->update($id, $data);
            
            if($result)
            {
                $this->session->set_flashdata('success','Employee Successfully Deleted!');
            }
            else
            {
                $this->session->set_flashdata('err', 'Employee Deletion Failed');
            }
            redirect(base_url('users/index'));
        }
    }
?>
