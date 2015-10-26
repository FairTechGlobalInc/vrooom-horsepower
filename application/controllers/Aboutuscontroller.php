<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutusController extends CI_Controller
{
        public function index(){
            $this->load->view('aboutus_view');
        }
}
