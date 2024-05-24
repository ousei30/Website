<?php
    class Product extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Product_model');
            $this->load->model('Login_model');
        }
        public function product()
        {
            $data['product'] = $this->Product_model->rows();
            // $this->load->view('template/NavNiVan');
            // $this->load->view('template/footer');
            
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('product/showproduct', $data);

            $this->load->view('template/footer'); 
        }
        public function productlist()
        {
            if ($this->session->userdata('user_status') != 1)
            {
                redirect(base_url());
            }
            
            $data['product'] = $this->Product_model->rows();
            $this->load->view('template/header');
            $this->load->view('template/nav');
            $this->load->view('product/productlist', $data);
            $this->load->view('template/footer');
        }
        public function addproduct()
        {
            if ($this->session->userdata('user_status') != 1)
            {
                redirect(base_url());
            }
            
            $this->form_validation->set_rules('product_name','name', 'trim|required');
            $this->form_validation->set_rules('product_description','description', 'trim|required');
            $this->form_validation->set_rules('product_price','price', 'trim|required');
            $this->form_validation->set_rules('series','series', 'trim|required');

            $upload = $this->Product_model->upload();

            if (is_array($upload))
            {
                if ($this->form_validation->run())
                {
                    $data = array(
                        'product_name'          => $this->input->post('product_name'),
                        'product_description'   => $this->input->post('product_description'),
                        'product_price'         => $this->input->post('product_price'),
                        'series'                => $this->input->post('series'),

                        'img'           => $upload['file_name'],
                        'location'      => $upload['file_path'],

                        'date_created'  => date('Y-m-d')
                    );
                    $result=$this->Product_model->add($data);
                    if($result)
                    {
                        $this->session->set_flashdata('success','Employee Succesfully Created!');
                        redirect(base_url());
                    }
                    else
                    {
                        $this->session->set_flashdata('err', 'Employee Registration Failed');
                    }
                }
            }
            $this->load->view('template/NavNiVan');
            $this->load->view('product/addproduct');
            $this->load->view('template/footer');
        }

        public function display($id)
        {   
            $data['product'] = $this->Product_model->row($id);
            $this->load->view('template/header');
            $this->load->view('template/NavNiVan');
            $this->load->view('product/editproduct', $data); // Pass $data to the view
            $this->load->view('template/footer');
        }
        public function update()
        {
            $this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
            $this->form_validation->set_rules('product_description', 'Product Description', 'trim|required');
            $this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');
        
            $id = $this->input->post('id');
        
            if ($this->form_validation->run()) {
                $data = array(
                    'product_name'        => $this->input->post('product_name'),
                    'product_description' => $this->input->post('product_description'),
                    'product_price'       => $this->input->post('product_price')
                );
        
                if (!empty($_FILES['img']['name'])) {
                    $upload = $this->Product_model->upload();
                    if (is_array($upload)) {
                        $data['img'] = $upload['file_name'];
                        $data['location'] = $upload['file_path'];
                    } else {
                        $this->session->set_flashdata('err', $upload);
                        redirect(base_url('product/edit/' . $id));
                        return;
                    }
                }
                $result = $this->Product_model->update($id, $data);
        
                if ($result) {
                    $this->session->set_flashdata('success', 'Product Successfully Updated!');
                    redirect(base_url('product/productlist'));
                } else {
                    $this->session->set_flashdata('err', 'Product Update Failed');
                }
            } else {
                $this->session->set_flashdata('err', validation_errors());
                redirect(base_url('product/edit/' . $id));
            }
        }
        public function delete($id)
        {
            $data = array(
                'is_deleted' => 1,
                'date_deleted' => date('Y-m-d') // Update the date
            );
            $result = $this->Product_model->update($id, $data);
            if($result)
            {
                $this->session->set_flashdata('success','Employee Successfully Deleted!');
            }
            else
            {
                $this->session->set_flashdata('err', 'Employee Deletion Failed');
            }
            redirect(base_url('product/productlist'));
        }
    }
?>
