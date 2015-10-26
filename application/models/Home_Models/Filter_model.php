<?php

class Filter_model extends CI_Model
{
    public function Vehicle_types()
    {
        $query = $this->db->select('Make')->from('carregistration');
        $ret['rows'] = $query->get()->result();
        return $ret;
    }

    public function Vehicle_models()
    {
        $query = $this->db->select('Model')->from('carregistration');
        $ret['rows'] = $query->get()->result();
        return $ret;
    }
    public  function Vehicle_colors(){
        $query = $this->db->select('Color')->from('carregistration');
        $ret['rows'] = $query->get()->result();
        return $ret;
    }
}
?>