<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Signup_model extends CI_Model{
    function _construct(){
        parent:: _construct();

    }
        public function can_signup($data){

            #query to check if the ID Number already exists in the DB
            $condition = "IDNumber =" . "'" . $data['IDNumber'] . "'";
            $this->db->select('*');
            $this->db->from('userregistration');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if($query->num_rows() == 0) {
                #Inserting in Table(userregistration)
                $this->db->insert('userregistration', $data);
                if($this->db->affected_rows() > 0){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }

