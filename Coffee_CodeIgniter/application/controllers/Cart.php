<?php
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
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
        $this->form_validation->set_rules('username','Employee Number', 'trim|required');

        if ($this->form_validation->run())
        {
            $id = $this->input->post('id'); // Get the ID of the user being updated

            $data = array(
                'username' => $this->input->post('username'),

                'update'       => 'users',
                'date_updated' => date('Y-m-d') // Update the date
            );

            $result = $this->Users_model->update($id, $data); // Call the update method

            if($result)
            {
                $this->session->set_flashdata('success','Employee Successfully Updated!');
                redirect(base_url('users/index'));
            }
            else
            {
                $this->session->set_flashdata('err', 'Employee Update Failed');
            }
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
}
?>