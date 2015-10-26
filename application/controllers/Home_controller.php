<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    function _construct(){
        parent:: _construct();
        $this->load->model('Signup_model');
    }
    public function index()
    {
        $this->load->model('Home_Models/Filter_model');
        $results = $this->Filter_model->Vehicle_types();

        $data['vehicle_types'] = $results['rows'];

        $this->load->model('Home_Models/Filter_model');
        $results = $this->Filter_model->Vehicle_models();

        $data['vehicle_models'] = $results['rows'];

        $this->load->model('Home_Models/Filter_model');
        $results = $this->Filter_model->Vehicle_colors();

        $data['vehicle_colors'] = $results['rows'];
        $this->load->view('Home_Page/header');
        $this->load->view('Home_Page/filter',$data);

    }
    public function login(){
        $this->load->view('login');
    }
    public function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('_idnumber','IDNumber','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('_password','Password','required|md5|trim');

        if($this->form_validation->run()){
            $this->load->view('dashboard');
        }else{
            $this->load->view('login');
        }
    }

    public function validate_credentials(){
        $this->load->model('Home_Models/Login_model');
        if($this->Login_model->can_log_in()){
            $this->dashboard();
            return true;
        }else{
            $this->form_validation->set_message('validate_credentials','Incorrect ID Number/Password');
            return false;
        }
    }

    public function dashboard(){
        if($this->session->userdata('logged_in')){
            $this->load->view('dashboard');
        }else{
            redirect('Home_controller/restricted');
        }
    }

    public function restricted(){
        $this->login();
    }

    public function signup(){
        $this->load->view('registrationview');
    }

    /**
     * creates a function to validate all the user entries then send an email to
     * the user to confirm the account creation, which is signed with an encrypted key
     * used to cross check the credibility of the account created from a temporary users table.
     * If successfully account confirmed then send key to permanent users tables, thus avoiding a number of dummy accounts
     */
    public function signup_validation(){
        $this->load->library('form_validation');
        # grabs the user input for validation.
        $this->form_validation->set_rules('_idnumber','IDNumber','required|trim|xss_clean');
        $this->form_validation->set_rules('_firstname','First Name','required|trim|xss_clean');
        $this->form_validation->set_rules('_middlename','Middle Name','trim|xss_clean');
        $this->form_validation->set_rules('_lastname','Last Name','required|trim|xss_clean');
        $this->form_validation->set_rules('_email','Email','required|trim|valid_email|is_unique[userregistration.Email]');
        $this->form_validation->set_rules('_phonenumber','Phone Number','required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('_password','Password','required|trim');
        $this->form_validation->set_rules('_cpassword','Confirm Password','required|trim|matches[_password]');
        #matches function, CI pre-defined checker function.
        #overrides the code igniter default error message if the email address used already exists in the database

        $this->form_validation->set_message('is_unique','Email already exists!!::Please try another Email address!!');
        if($this->form_validation->run()){
            ##########################################################################################################################
            #  generates a unique key every time a user signs up, and ensures that each user has a private key                      ##
            #  before sending an email to the new user. Then encrypts the key with md5.                                             ##
            ##########################################################################################################################
//            $key = md5(uniqid());

            ####################################################################################
            ##   calls the CI mail function libraries                                         ##
            ##   configures the CI mail library to send the message in html format to the user #
            ####################################################################################
//            $this->load->library('email',array('mailtype'=>'html'));
//            #sets email defaults
//            $this->email->from('antoinfic@icloud.com','FairTechGlobal');
//            $this->email->to($this->input->post('_email'));
//            $this->email->subject('Account Confirmation');
//
//            $message = "<p>Thank You for Signing Up with Us!!!</p>";
//            $message .= "<p><a href='".base_url()."Home_controller/registered_users/$key'>Click Here</a> to confirm your account</p>";
//            $message .= "<p></p>";
//            $message .= "<p align='center'>Message Signature :$key</p>";
//            $message .= "<p align='center'>FairTechGlobal Inc</p>";
//            $message .= "<p align='center'>Create.Innovate.Aspire,Inspire</p>";
//
//            $this->email->message($message);
//            if($this->email->send()){
//                echo "<div class='alert alert-success'>An Email has been sent to your mail address provided</div>";

            $data = array(
                'IDNumber' => $this->input->post('_idnumber'),
                'FirstName' => $this->input->post('_firstname'),
                'MiddleName' => $this->input->post('_middlename'),
                'LastName' => $this->input->post('_lastname'),
                'Email' => $this->input->post('_email'),
                'DriversLicense' =>$this->input->post('_driverslicense'),
                'PhoneNumber' => $this->input->post('_phonenumber'),
                'DateOfBirth'=> $this->input->post('_dob'),
                'Password' => $this->input->post('_password')
            );
                #transfer data to the Signup_model
                $this->load->model('Signup_model');
                $result = $this->Signup_model->can_signup($data);
                if($result == TRUE){
                    $data['message'] = 'Data Inserted Successfully';
                    #Load the Login View
                    $this->load->view('login', $data);
                }else{
                    echo "<script>alert('Could not Sign Up!!')</script>";
                }
//            }else{
//                echo "<div class='alert alert-danger'>Email Send Failure</div>";
//                $this->load->view('registrationview');
//            }
            $this->load->view('dashboard');
        }else{
            echo "<div class='alert alert-warning alert-dismissible' role='alert'>
                   <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <strong>Caution!</strong>Could not Register at the moment,Please try again!!</div>";
            $this->load->view('registrationview');
        }
    }

    public function validate_details(){
//        $this->load->model('Home_Models/Signup_model');
//        if($this->Signup_model->can_signup()){
//            $this->login();
//            return true;
//        }else{
//            $this->form_validation->set_message('validate_details','Incorrect Details filled');
//            return false;
//        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect($this->login());
    }
}
