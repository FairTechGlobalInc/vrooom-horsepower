<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model{

    /**
     * @return bool
     */
    // Read data using username and password
    public function login($username,$password)
    {
        $this->db->select ('IDNumber,Password');
        $this->db->from('userregistration');
        $this->db->where('IDNumber',$username);
        $this->db->where('Password',md5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        if($query -> num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }
}
