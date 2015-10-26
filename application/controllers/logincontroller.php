<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller
{
     function _construct(){
        parent::__construct();
    }

    /**
     *
     */
    public function user_login_process(){
       $this->load->library('form_validation');
        $this->form_validation->set_rules('_idnumber','ID Number','trim|required|xss_clean');
        $this->form_validation->set_rules('_password','Password','trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run()){
            redirect('Home_controller/dashboard','refresh');
        }else{
            $this->load->view('login');
        }
    }

    public function check_database($password){
        #if validation has succeeded
         $username = $this->input->post('_idnumber');

        #perform db query
        $this->load->model('usermodel');
        $result = $this->usermodel->login($username,$password);
        if($result == TRUE){
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                    'IDNumber'  => $row->id,
                    'FirstName' => $row->username,
                );
                $this->session->set_userdata('logged_in',$sess_array);
            }
            return true;
        }else{
            $this->form_validation->set_message('check_database','Invalid Login Credentials');
            return false;
        }
    }

    // Logout from dashboard page
    public function logout() {

    }
}
