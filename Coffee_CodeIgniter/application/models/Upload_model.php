<?php
class Upload_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form', 'url'));
    }

    public function upload()
    {
        $config['upload_path']          = './image/';
        $config['allowed_types']        = 'gif|jpg|png|jiff';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $uploaded = $this->upload->do_upload('img');

        if($uploaded)
        {
            return $this->upload->data();
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
    }
}