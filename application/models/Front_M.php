<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Front_M extends CI_Model
{
    private $_table = "design";

    public $design_id;
    public $name;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getDesignForHome()
    {
        return $this->db->get($this->_table)->result();
        
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["design_id" => $id])->row();
    }
    
    
}