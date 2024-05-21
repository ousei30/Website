<?php
class Product_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'product_list';
    }

    public function upload()
    {
        $config['upload_path']          = './image/';
        $config['allowed_types']        = 'gif|jpg|png|jiff';
        // $config['max_size']             = '50M';
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

    public function rows()
    {
        $where = array('is_deleted' => 0);
        $query = $this->db->get_where($this->table,$where);
        return $query->result();
    }
    public function row($id)
    {
        $where = array('is_deleted' => 0, 'id' => $id);
        $query = $this->db->get_where($this->table,$where);
        return $query->row();
    }
    public function add($data)
    {
        $this->db->insert($this->table,$data);
        return true;
    }
    public function update($id,$data)
    {
        $where = array('is_deleted' => 0, 'id' => $id);
        $query = $this->db->update($this->table,$data,$where);
        return true;
    }
}