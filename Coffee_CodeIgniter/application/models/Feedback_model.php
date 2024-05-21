<?php
class Feedback_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'feedback';
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
?>